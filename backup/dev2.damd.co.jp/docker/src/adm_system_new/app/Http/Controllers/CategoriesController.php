<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->paginate(10);
        return view('categories/index', compact('categories'));
    }

    public function create()
    {
        return view('categories/add');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->fill($request->all());
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories/edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('flash_message', $category->name.'を削除しました。');
        return redirect()->route('categories.index');
    }
}
