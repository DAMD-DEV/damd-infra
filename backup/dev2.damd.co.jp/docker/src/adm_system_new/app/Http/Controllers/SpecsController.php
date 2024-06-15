<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;
use App\Models\Car;
use App\Models\Maker;

class SpecsController extends Controller
{
    public function index()
    {
        $specs = Spec::orderBy('updated_at', 'desc')->paginate(10);
        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');
        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');
        return view('specs/index', compact('specs', 'makers_list', 'cars_list'));
    }

    public function create()
    {
        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');
        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');

        return view('specs/add', compact('makers_list', 'cars_list'));
    }

    public function store(Request $request)
    {
        $spec = new Spec;
        $spec->fill($request->all());
        $spec->save();

        return redirect()->route('specs.index');
    }

    public function edit($id)
    {
        $spec = Spec::find($id);

        $makers = Maker::all();
        $makers_list = $makers->pluck('name', 'id');
        $cars = Car::all();
        $cars_list = $cars->pluck('name', 'id');

        return view('specs/edit', compact('spec', 'makers_list', 'cars_list'));
    }

    public function update(Request $request, $id)
    {
        $spec = Spec::find($id);
        $spec->fill($request->all());
        $spec->save();

        return redirect()->route('specs.index');
    }

    public function destroy($id)
    {
        $spec = Spec::find($id);
        $spec->delete();
        session()->flash('flash_message', $spec->name.'を削除しました。');
        return redirect()->route('specs.index');
    }
}
