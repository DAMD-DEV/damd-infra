<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;

class ShippingsController extends Controller
{
    public function index()
    {
        $shippings = Shipping::orderBy('updated_at', 'desc')->paginate(10);
        return view('shippings/index', compact('shippings'));
    }

    public function create()
    {
        return view('shippings/add');
    }

    public function store(Request $request)
    {
        $shipping = new Shipping;
        $shipping->fill($request->except('sections'));
        $sections = implode(',', $request->sections);
        $shipping->sections = $sections;
        $shipping->save();

        return redirect()->route('shippings.index');
    }

    public function edit($id)
    {
        $shipping = Shipping::find($id);
        $a_sections = explode(',', $shipping->sections);

        return view('shippings/edit', compact('shipping', 'a_sections'));
    }

    public function update(Request $request, $id)
    {
        $shipping = Shipping::find($id);
        $shipping->fill($request->except('sections'));
        $sections = implode(',', $request->sections);
        $shipping->sections = $sections;
        $shipping->save();

        return redirect()->route('shippings.index');
    }

    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        $shipping->delete();
        session()->flash('flash_message', $shipping->name.'を削除しました。');
        return redirect()->route('shippings.index');
    }
}
