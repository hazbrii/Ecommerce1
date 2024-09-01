<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ClientController extends Controller
{
    public function index(){
        $clients = User :: where('role',0)->get();
        return view('admin.client.index',['clients'=>$clients]);
    }
    public function show(User $client){
        $orders = $client->orders()->orderBy('created_at', 'desc')->get();
        return view('admin.client.show',['client' => $client,'orders'=>$orders]);
    }
}
