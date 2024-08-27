<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        $cart = session()->get('cart', []);
        return view('client.cart.show', ['cart'=>$cart]);
    }
    public function addToCart(Request $request){
        $productId =  $request->input('id');
        $product = [
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "quantity" => $request->input('quantity', 1),
        ];
        $product['subtotal'] = $product['price'] * $product['quantity'];
        $cart = session()->get('cart', [
            'products' => [],
            'totalPrice' => 0,
        ]);
        
        $products = $cart['products'];
        if (isset($products[$productId])) {
            $cart['products'][$productId]['quantity'] += $product['quantity'];
        } else {
            $cart['products'][$productId] = $product;
        }
        $cart['totalPrice'] += $product['price'] * $product['quantity'];
        session()->put('cart', $cart);
        return back()->with('success', 'Product added to cart!');
    }
    public function removeFromCart(Request $request)
    {
        $productId = $request->input('id');
        $cart = session()->get('cart', []);
        if (isset($cart['products'][$productId])) {
            $cart['totalPrice'] -= $cart['products'][$productId]['quantity'] * $cart['products'][$productId]['price'];
            unset($cart['products'][$productId]);
            session()->put('cart', $cart);
        }
        return back()->with('info', 'Product removed from cart!');;
    }
}
