<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        dd(session('cart'));

        $cart = json_decode(request()->session()->get('cart', '[]'), true);
        $total = 0;
        foreach ($cart as $product) {
            $total += $product['price'];
        }
        return view('cart.index', ['cart' => $cart, 'total' => $total]);
    }

    public function addToCart(Request $request)
    {
        $index = $request->input('index');
        $product = $this->products[$index];
        $cart = session('cart', []);
        $cart[] = $product;
        session(['cart' => $cart]);
        return response()->json(['message' => 'Product added to cart.']);
    }

}
