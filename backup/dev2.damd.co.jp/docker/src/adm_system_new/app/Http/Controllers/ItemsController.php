<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemSize;
use App\Models\Maker;
use App\Models\Car;
use App\Models\Spec;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Factory;
use App\Models\Color;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $query = Item::query();

        if($request->name){
            $query->where('name', 'LIKE', "%".$request->name."%");
        }
        if($request->maker){
            $query->where('maker_id', '=', $request->maker);
        }
        if($request->maker){
            $query->where('car_id', '=', $request->car);
        }


        $items = $query->orderBy('updated_at', 'desc')->paginate(10);

        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');

        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');

        $specs = Spec::all();
        $specs_list = $specs->pluck('name', 'id');

        $categories = Category::all();
        $categories_list = $categories->pluck('name', 'id');

        $factories = Factory::all();
        $factories_list = $factories->pluck('name', 'id');

        $shippings = Shipping::all();
        $shippings_list = $shippings->pluck('name', 'id');

        return view('items/index', compact('items', 'request', 'makers_list', 'cars_list', 'specs_list', 'categories_list', 'factories_list', 'shippings_list'));
    }

    public function create()
    {
        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');

        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');

        $specs = Spec::all();
        $specs_list = $specs->pluck('name', 'id');

        $categories = Category::all();
        $categories_list = $categories->pluck('name', 'id');

        $shippings = Shipping::all();
        $shippings_list = $shippings->pluck('name', 'id');

        $factories = Factory::all();
        $factories_list = $factories->pluck('name', 'id');

        $items = Item::all();
        $items_list = $items->pluck('name', 'id');

        $colors = Color::all();
        $colors_list = $colors->pluck('name', 'id');

        return view('items/add', compact('makers_list', 'cars_list', 'specs_list', 'categories_list', 'shippings_list', 'factories_list', 'items_list', 'colors_list'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validation_rules());

        $item = new Item;
        $item->fill($request->except('loan', 'composition', 'colors', 'template_ids'));

        if($request->loan){
            $item->loan = implode(',', $request->loan);
        }
        if($request->composition){
            $item->composition = implode(',', $request->composition);
        }
        if($request->colors){
            $item->colors = implode(',', $request->colors);
        }
        if($request->template_ids){
            $item->template_ids = implode(',', $request->template_ids);
        }

        $item->save();
        
        $item_size = new ItemSize;
        $item_size->item_id = $item->id;
        $item_size->fill($request->all());
        $item_size->save();

        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::find($id);

        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');

        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');

        $specs = Spec::all();
        $specs_list = $specs->pluck('name', 'id');

        $categories = Category::all();
        $categories_list = $categories->pluck('name', 'id');

        $shippings = Shipping::all();
        $shippings_list = $shippings->pluck('name', 'id');

        $factories = Factory::all();
        $factories_list = $factories->pluck('name', 'id');

        $items = Item::all();
        $items_list = $items->pluck('name', 'id');

        $colors = Color::all();
        $colors_list = $colors->pluck('name', 'id');

        return view('items/edit', compact('item', 'makers_list', 'cars_list', 'specs_list', 'categories_list', 'shippings_list', 'factories_list', 'items_list', 'colors_list'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->validation_rules());

        $item = Item::find($id);

        $item->fill($request->except('composition', 'colors', 'template_ids', 'loan'));

        $item->loan = $request->loan?implode(',', $request->loan):null;
        $item->composition = $request->composition?implode(',', $request->composition):null;
        $item->colors = $request->colors?implode(',', $request->colors):null;
        $item->template_ids = $request->template_ids?implode(',', $request->template_ids):null;

        $item->save();

        $item_size = $item->size;
        $item_size->item_id = $item->id;
        $item_size->fill($request->all());
        $item_size->save();

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        session()->flash('flash_message', $item->name.'を削除しました。');
        return redirect()->route('items.index');
    }

    private function validation_rules()
    {
        return [
            'name' => 'required',
            'price' => 'required',
        ];
    }
}
