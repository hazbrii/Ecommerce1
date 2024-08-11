<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(){
        $categories = Categorie::with('products')->get();
        return view('client.shop.index',['categories'=>$categories]);
    }
    
}
