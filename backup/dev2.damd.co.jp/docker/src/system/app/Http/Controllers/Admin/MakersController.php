<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maker;

class MakersController extends Controller
{
    public function index()
    {
        $makers = Maker::orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.makers.index', compact('makers'));
    }

    public function create()
    {
        return view('admin.makers.add');
    }

    public function store(Request $request)
    {
        $maker = new Maker;

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('admin.makers.index');
    }

    public function edit($id)
    {
        $maker = Maker::find($id);

        return view('admin.makers.edit', compact('maker'));
    }

    public function update(Request $request, $id)
    {
        $maker = Maker::find($id);

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('admin.makers.index');
    }

    public function destroy($id)
    {
        $maker = Maker::find($id);
        $maker->delete();
        session()->flash('flash_message', $maker->name.'を削除しました。');
        return redirect()->route('admin.makers.index');
    }
}
