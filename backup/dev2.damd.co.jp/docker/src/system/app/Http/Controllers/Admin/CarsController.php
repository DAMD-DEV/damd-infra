<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Maker;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('updated_at', 'desc')->paginate(20);
        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');
        return view('admin.cars.index', compact('cars', 'makers_list'));
    }

    public function create()
    {
        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');

        return view('admin.cars.add', compact('makers_list'));
    }

    public function store(Request $request)
    {
        $car = new Car;

        $car->fill($request->all());

        $car->save();

        return redirect()->route('admin.cars.index');
    }

    public function edit($id)
    {
        $car = Car::find($id);

        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');

        return view('admin.cars.edit', compact('car', 'makers_list'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        $car->fill($request->all());

        $car->save();

        return redirect()->route('admin.cars.index');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        session()->flash('flash_message', $car->name.'を削除しました。');
        return redirect()->route('admin.cars.index');
    }
}
