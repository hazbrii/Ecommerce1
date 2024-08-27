<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(){
        return view('client.checkout.show');
    }
    public function store(Request $request){
        // i have all the data in the session 
        dd('hello');
    }
}
