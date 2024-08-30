<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;


class CheckoutController extends Controller
{
    public function show(){
        return view('client.checkout.show');
    }
    public function store(){        
        //get the note and the new address
        //i have to check if new address is null i have to add an address to the order called new_address
        // i have all the data in the session 
        $cart = session()->get('cart');
        $order = Order::create([
            'total'=>$cart['totalPrice'],
            'status'=>1,
            'paid'=>0,  
            'new_address'=>request()->new_address,
            'note'=>request()->note,
            'user_id'=>Auth::id()
        ]);
        foreach($cart['products'] as $productId=>$product){
            OrderDetail::create([
                'product_id' =>$productId,
                'order_id'=>$order->id,
                'quantity'=>$cart['products'][$productId]['quantity']
            ]);
        }
        return back()->with('success','you have ordered successfully');


    }
}
