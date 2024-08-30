<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function index(){
        $orders = Order::with(['orderDetails','user'])->get();
        return view('admin.order.index',['orders'=>$orders]);
    }
    public function show(Order $order){
        $user = Auth::user();
        // $cacheKeyCategories = 'user_' . $user->id . '_categories';
        $cacheKeyProducts = 'user_' . $user->id . '_products';

        $products = Cache::get($cacheKeyProducts);
        return view('admin.order.show',['order'=>$order,'products'=>$products]);
    }
    public function update(Order $order){
        request()->validate([
            'status' => 'required|integer|between:0,5',
        ]);
        $status = request()->status;
        if ($status == 3){
            $order->update([
                'status'=>request()->status,
                'paid'=>1
            ]);
        }else {
            $order->update([
                'status'=>request()->status
            ]);
        }

        return back();
    }
}
