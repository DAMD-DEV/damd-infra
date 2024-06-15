<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maker;

class MakersController extends Controller
{
    public function index()
    {
        $makers = Maker::orderBy('updated_at', 'desc')->paginate(10);
        return view('makers/index', compact('makers'));
    }

    public function create()
    {
        return view('makers/add');
    }

    public function store(Request $request)
    {
        $maker = new Maker;

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('makers.index');
    }

    public function edit($id)
    {
        $maker = Maker::find($id);

        return view('makers/edit', compact('maker'));
    }

    public function update(Request $request, $id)
    {
        $maker = Maker::find($id);

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('makers.index');
    }

    public function destroy($id)
    {
        $maker = Maker::find($id);
        $maker->delete();
        session()->flash('flash_message', $maker->name.'を削除しました。');
        return redirect()->route('makers.index');
    }
}
