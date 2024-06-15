<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;

class FactoriesController extends Controller
{
    public function index()
    {
        $factories = Factory::orderBy('updated_at', 'desc')->paginate(10);
        return view('factories/index', compact('factories'));
    }

    public function create()
    {
        return view('factories/add');
    }

    public function store(Request $request)
    {
        $factory = new Factory;
        $factory->fill($request->all());
        $factory->save();

        return redirect()->route('factories.index');
    }

    public function edit($id)
    {
        $factory = Factory::find($id);

        return view('factories/edit', compact('factory'));
    }

    public function update(Request $request, $id)
    {
        $factory = Factory::find($id);
        $factory->fill($request->all());
        $factory->save();

        return redirect()->route('factories.index');
    }

    public function destroy($id)
    {
        $factory = Factory::find($id);
        $factory->delete();
        session()->flash('flash_message', $factory->name.'を削除しました。');
        return redirect()->route('factories.index');
    }
}
