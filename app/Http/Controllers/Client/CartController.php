<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CartController extends Controller
{
    public function show(){
        $cart = session()->get('cart', []);
        return view('client.cart.show', ['cart'=>$cart]);
    }
    public function addToCart(Request $request){
        $products = Cache::get('products',collect());
        $productId =  $request->input('id');
        $product = [
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "quantity" => $request->input('quantity', 1),
            "image" =>$request->input('image'),
        ];
        $product['subtotal'] = $product['price'] * $product['quantity'];
        $cart = session()->get('cart', [
            'products' => [],
            'totalPrice' => 0,
        ]);
        
        if (isset($cart['products'][$productId])) {
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
    public function updateProductQuantity(Request $request)
    {
        $productId = $request->input('id');
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);
        $cart['products'][$productId]['quantity'] = $quantity;
        $cart['products'][$productId]['subtotal'] = $quantity * $cart['products'][$productId]['price'] ;
        session()->put('cart', $cart);
        return back()->with('info', 'Product removed from cart!');;
    }
}
