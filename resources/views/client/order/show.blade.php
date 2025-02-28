@extends('client.layouts.app')
@section('title') Order @endsection
<style>
    .track-line {
        height: 2px !important;
        background-color: #488978;
        opacity: 2;
    }

    .dot {
        height: 12px;
        width: 12px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        
    }

    .big-dot {
        height: 25px;
        width: 25px;
        background-color: #488978;
        border-radius: 50%;
        display: inline-block;
        position: relative;
    }

    .big-dot i {
        font-size: 12px;
        position: relative;
    }

    .card-stepper {
        z-index: 0;
    }

    .track-line-container {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .track-line {
        flex-grow: 1;
        margin: 0 8px;
    }
</style>
@section('content')
<main class="main-wrapper">
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{route('/')}}">Orders</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Order</li>
                        </ul>
                        <h1 class="title">Track your Order#1</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <section class="vh-10" >
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="card card-stepper" style="border-radius: 10px;">
                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <span class="lead fw-normal">Order Id #1</span>
                        <span class="text-muted small">On 21 Jan, 2020</span>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary" type="button">Track order details</button>
                    </div>
                    </div>
                    <hr class="my-4">

                    <!-- Progress bar -->
                    <div class="track-line-container">
                    <span class="dot"></span>
                    <hr class="track-line "><span class="dot"></span>
                    <hr class="track-line "><span class="dot big-dot text-center">
                        <i class="fa fa-check text-white"></i></span>
                    </div>

                    <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-column align-items-start"><span>15 Mar</span><span>Order Confirmed</span></div>
                    <div class="d-flex flex-column justify-content-center align-items-center"><span>15 Mar</span><span>Out for delivery</span></div>
                    <div class="d-flex flex-column align-items-center"><span>15 Mar</span><span>Delivered</span></div>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="axil-product-cart-area axil-section-gap">
        <div class="container">
            <div class="axil-product-cart-wrap">
                <div class="product-table-heading">
                        <h4 class="title">Products Ordered</h4>
                        <!-- <a href="#" class="cart-clear">Clear Shoping Cart</a>   -->
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-cart-table ">
                        <thead>
                            <tr>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-quantity">Quantity</th>
                                <th scope="col" class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail"><a href="single-product-3.html"><img src="./assets/images/product/electric/product-03.png" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product-3.html">HD CC Camera</a></td>
                                <td class="product-price" ><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-quantity" >1</td>
                                <td class="product-subtotal" ><span class="currency-symbol">$</span>275.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main> 
@endsection
