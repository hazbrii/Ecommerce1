@extends('layouts.app')
@section('title') Cart @endsection
@section('content')
    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Your Cart</h4>
                        <a href="#" class="cart-clear">Clear Shoping Cart</a>
                    </div>
                    <div class="table-responsive">
                        @if(!empty(session('cart')))
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-remove"></th>
                                    <th scope="col" class="product-thumbnail">Product</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Price</th>
                                    <th scope="col" class="product-quantity">Quantity</th>
                                    <th scope="col" class="product-subtotal">Subtotal</th>
                                    <th scope="col" class="product-subtotal"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(session('cart.products') as $productId => $product)
                                    @php
                                        $subtotal = $product['price'] * $product['quantity'];
                                    @endphp
                                    <tr>
                                        <td class="product-remove">
                                            <form id="remove_from_cart_{{ $productId }}" action="{{ route('cart.remove') }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $productId }}">
                                                <a href="" onclick="event.preventDefault(); document.getElementById('remove_from_cart_{{ $productId }}').submit();" class="remove-wishlist">
                                                    <i class="fal fa-times"></i>
                                                </a>
                                            </form>    
                                        </td>
                                        <td class="product-thumbnail"><a href="single-product.html"><img src="./assets/images/product/electric/product-01.png" alt="Digital Product"></a></td>
                                        <td class="product-title"><a href="single-product.html">{{$product['name']}}</a></td>
                                        <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>{{$product['price']}}</td>
                                        <td class="product-quantity" data-title="Qty">
                                            <div class="pro-qty">
                                                <form id="update_product_quantity_{{$productId}}" action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id">
                                                    <input type="number" id="quantity_{{$productId}}" name="quantity" class="quantity-input" value="{{$product['quantity']}}">
                                                </form>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>{{$product['subtotal']}}</td>
                                    </tr>
                                @endforeach
                                
                                
                            </tbody>
                           
                        </table>
                        @else
                            <div class='text-center my-5' style='font-size:20px;'>No data found</div>
                        @endif  
                    </div>
                    <!-- <div class="cart-update-btn-area">
                        <div class="input-group product-cupon">
                            <input placeholder="Enter coupon code" type="text">
                            <div class="product-cupon-btn">
                                <button type="submit" class="axil-btn btn-outline">Apply</button>
                            </div>
                        </div>
                        <div class="update-btn">
                            <a href="#" class="axil-btn btn-outline">Update Cart</a>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Order Summary</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-shipping">
                                                <td>Shipping</td>
                                                <td>7 DT</td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>Tax</td>
                                                <td>{{session('cart.totalPrice') * 0.01}} DT</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">{{session('cart.totalPrice')}} DT</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{route('checkout.show')}}" class="axil-btn btn-bg-primary checkout-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>
    @endsection