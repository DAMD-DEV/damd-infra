<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorsController extends Controller
{
    public function index()
    {
        $colors = Color::orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.add');
    }

    public function store(Request $request)
    {
        $color = new Color;
        $color->fill($request->all());
        $color->save();

        return redirect()->route('admin.colors.index');
    }

    public function edit($id)
    {
        $color = Color::find($id);

        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, $id)
    {
        $color = Color::find($id);
        $color->fill($request->all());
        $color->save();

        return redirect()->route('admin.colors.index');
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        session()->flash('flash_message', $color->name.'を削除しました。');
        return redirect()->route('admin.colors.index');
    }
}
