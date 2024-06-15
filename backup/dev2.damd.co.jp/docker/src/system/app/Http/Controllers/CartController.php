<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart_data = $request->session()->get('cart_data');
        $cart_status = $request->session()->get('cart_status');

        $cart_info = [];
        
        if($cart_data){
            foreach($cart_data as $index => $cart_item ){
                $item = Item::find($cart_item['item_id']);
                $cart_info[$index] = [
                    'name' => $item->name
                ];
            }
        }

        if(strpos(url()->previous(), 'products/')){
            $product_page = substr(strstr(url()->previous(), 'products/'), 9);
            $request->session()->put('product_page', $product_page);
        } else {
            if(strpos(url()->previous(), 'cart') == false){
                $request->session()->forget('product_page');
            }
        }

        if($request->session()->get('product_page')){
            $return_url = url('/products/'.$request->session()->get('product_page'));
        } else {
            $return_url = url('/products/');
        }

        return view('cart.index', compact('cart_data', 'cart_info', 'cart_status', 'return_url'));
    }

    public function store(Request $request)
    {
        // $request->session()->forget('cart_data');
        $item_id = $request->item_id;

        $quantity = $request->quantity??1;
        $paint = $request->item_paint??0;
        $mount = $request->item_mount??0;
        $pref = $request->item_place??null;

        $total = $request->item_total??0;

        $cart_data = compact("item_id", "quantity", "paint", "mount", "pref", "total");

        if($request->session()->get('cart_status') == null){
            $cart_info = [
                'paint' => $paint,
                'mount' => $mount,
                'pref' => $pref,
            ];
            $request->session()->put('cart_status', $cart_info);
        }

        $request->session()->push('cart_data', $cart_data);

        if(strpos(url()->previous(), 'products/')){
            $product_page = substr(strstr(url()->previous(), 'products/'), 9);
            $request->session()->put('product_page', $product_page);
        } else {
            $request->session()->forget('product_page');
        }

        return redirect()->route('cart.index');
    }

    public function destroy(Request $request, $id)
    {
        $cart_data = $request->session()->get('cart_data');
        $target = null;

        foreach($cart_data as $index => $item)
        {
            if($item['item_id'] == $id)
            {
                $target = $index;
            }
        }

        unset($cart_data[$target]);

        if(empty($cart_data)){
            $request->session()->forget('cart_status');
        }

        $cart_data = array_values($cart_data);
        $request->session()->put('cart_data', $cart_data);

        return redirect()->route('cart.index');
    }
}
