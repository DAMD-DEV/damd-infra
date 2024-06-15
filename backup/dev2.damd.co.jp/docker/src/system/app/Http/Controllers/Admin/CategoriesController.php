<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->fill($request->all());
        $category->save();

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('flash_message', $category->name.'を削除しました。');
        return redirect()->route('admin.categories.index');
    }
}
