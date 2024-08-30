@extends('admin.layouts.app')
@section('title') Order Detail @endsection
@section('content')
<main class="main-wrapper">
    
        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header row">
                                    <div class="col-8">
                                        <div class="card-title">Order #{{$order->id}}</div>
                                        <h6><span>Ordered at </span>{{$order->created_at}}</h6>
                                        @if ($order->status == 5)
                                            <h4 class="fw-bold text-danger">Failed</h4>
                                        @elseif ($order->status == 4)
                                            <h4 class="fw-bold text-warning">Warning</h4>
                                            <h5 class="fw-bold text-warning">Status : Delivery Problem</h5>
                                        @elseif ($order->status == 3)
                                            <h4 class="fw-bold text-success">Success</h4>
                                            <h5 class="fw-bold  text-success">Status : Delivered</h5>
                                        @else
                                            <h4 class="fw-bold text-primary">In progress</h4>
                                            <h5 class="fw-bold ">Status : {{$order->getStatusText()}}</h5>
                                        @endif
                                    </div>
                                    <div class="col-4">
                                        <form action="{{route('orders.update',$order)}}" method="post">
                                            @csrf
                                            @method('patch')
                                            <select class="form-select mb-2" name="status">
                                                <option value='1' @if($order->status == 1) selected @endif>Confirmed</option>
                                                <option value='2' @if($order->status == 2) selected @endif>Shipping</option>
                                                <option value='3' @if($order->status == 3) selected @endif>Delivered</option>
                                                <option value='4' @if($order->status == 4) selected @endif>Delivery problem</option>
                                                <option value='5' @if($order->status == 5) selected @endif>Failed</option>
                                            </select>
                                            <button type="submit" class='btn btn-primary'>Modify Status</button>
                                        </form>
                                        
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-head-bg-primary mt-1">
                                    <thead>
                                            <tr>
                                                <th scope="col" >Product</th>
                                                <th scope="col" >Price</th>
                                                <th scope="col" >Quantity</th>
                                                <th scope="col" >Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $subtotal = 0 ;
                                            @endphp
                                            @foreach($order->orderDetails as $orderDetail)
                                                @php
                                                    $product = $products->find($orderDetail->product_id);
                                                    $subtotal += $product->price * $orderDetail->quantity ;
                                                @endphp
                                                <tr>
                                                    <td class='avatar-img'><a href="{{route('products.show',$product)}}"><img src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{$product->name}}" style="width: 50px; height: auto;"> {{$product->name}}</a></td>
                                                    <td >{{$product->price}} DT</td>
                                                    <td >{{$orderDetail->quantity}}</td>
                                                    <td >{{$product->price * $orderDetail->quantity}} DT</td>
                                                </tr>
                                            @endforeach 
                                                <tr >
                                                    <td class="text-center fw-bold" colspan="3">Subtotal</td>
                                                    <td  class="fw-bold">{{$subtotal}} DT</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center fw-bold" colspan="3">Shipping</td>
                                                    <td  class="fw-bold">7 DT</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center fw-bold" colspan="3">Tax</td>
                                                    <td  class="fw-bold">{{$order->total * 0.07}} DT</td>
                                                </tr>
                                                <tr >
                                                    <td class="text-center fw-bold" colspan="3">Total</td>
                                                    <td class="fw-bold text-primary">{{$order->total}} DT</td>
                                                </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card card-round">
                                <div class="card-body">
                                    <div class="card-title fw-mediumbold">Client #{{$order->user_id}} Informations : </div>
                                        <div class="card-list">
                                            <div class="item-list">
                                                <i class='fa fa-user'></i> {{$order->user->fullname}}
                                            </div>
                                            <div class="item-list">
                                                <i class='fa fa-phone'></i> {{$order->user->phone_number}}
                                            </div>
                                            <div class="item-list">
                                                <i class='fa fa-envelope'></i> {{$order->user->email}}
                                            </div>
                                            <div class="item-list">
                                                <i class='fa fa-address-card'></i> {{$order->user->gouvernorat}},  {{$order->user->address}}
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-round">
                                <div class="card-body">
                                    <div class="card-title fw-mediumbold"><i class='fas fa-sticky-note'></i>Client Notes : </div>
                                        <div class="card-text">
                                            {{$order->note}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
        <!-- End Cart Area  -->
    </main>

    @endsection