<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipping;

class ShippingsController extends Controller
{
    public function index()
    {
        $shippings = Shipping::orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.shippings.index', compact('shippings'));
    }

    public function create()
    {
        return view('admin.shippings.add');
    }

    public function store(Request $request)
    {
        $shipping = new Shipping;
        $shipping->fill($request->except('sections'));
        $sections = implode(',', $request->sections);
        $shipping->sections = $sections;
        $shipping->save();

        return redirect()->route('admin.shippings.index');
    }

    public function edit($id)
    {
        $shipping = Shipping::find($id);
        $a_sections = explode(',', $shipping->sections);

        return view('admin.shippings.edit', compact('shipping', 'a_sections'));
    }

    public function update(Request $request, $id)
    {
        $shipping = Shipping::find($id);
        $shipping->fill($request->except('sections'));
        $sections = implode(',', $request->sections);
        $shipping->sections = $sections;
        $shipping->save();

        return redirect()->route('admin.shippings.index');
    }

    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        $shipping->delete();
        session()->flash('flash_message', $shipping->name.'を削除しました。');
        return redirect()->route('admin.shippings.index');
    }
}
