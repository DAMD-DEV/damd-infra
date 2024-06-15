<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $cart_data = $request->session()->get('cart_data');

        $cart_status = $request->session()->get('cart_status');

        return view('order.index', compact('cart_data', 'cart_status'));
    }

    public function store(Request $request)
    {
        return view('order.index');
    }
}
