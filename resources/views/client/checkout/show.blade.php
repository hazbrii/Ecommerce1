@extends('client.layouts.app')
@section('title') Chekout @endsection
@section('content')
    <main class="main-wrapper">
        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                
                    <div class="row">
                        <div class="col-lg-6">
                            @guest
                            <div class="axil-checkout-notice">
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> If you didn't Logged in, Please Log in first? <a href="{{route('login')}}" >Click here to login</a>
                                    </div>
                                </div>
                                <div class="axil-toggle-box">
                                    <div class="toggle-bar"><i class="fas fa-user"></i> If you don't have an account please create your account first? <a href="{{route('register')}}" >Click here to Register</a>
                                    </div>
                                </div>
                            </div>
                            @endguest
                            <form  method="post" action="{{ route('checkout.store') }}">
                                <div class="axil-checkout-billing">
                                    @auth
                                    <div class="form-group different-shippng">
                                        <div class="toggle-bar">
                                            <a href="javascript:void(0)" class="toggle-btn">
                                                <input type="checkbox" id="checkbox2" name="diffrent-ship">
                                                <label for="checkbox2">Ship to a different address?</label>
                                            </a>
                                        </div>
                                        <div class="toggle-open">
                                            <div class="form-group">
                                                <label>Address <span>*</span></label>
                                                <input type="text" id="address" name="new_address" class="mb--15" placeholder="House number and street name">
                                            </div>
                                        </div>
                                    </div>
                                    @endauth
                                    
                                    <div class="form-group">
                                        <label>Other Notes (optional)</label>
                                        <textarea id="notes" name='note' rows="2" placeholder="Notes about your order, e.g. speacial notes for delivery."></textarea>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="axil-order-summery order-checkout-summery">
                                <h5 class="title mb--20">Your Order</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(session('cart.products') as $productId => $product)
                                                <tr class="order-product">
                                                    <td>{{$product['name']}}<span class="quantity"> x{{$product['quantity']}}</span></td>
                                                    <td>{{$product['subtotal']}} DT</td>
                                                </tr>
                                            @endforeach
                                            <tr class="order-shipping">
                                                <td colspan="2">
                                                    <div class="shipping-amount">
                                                        <span class="title">Shipping</span>
                                                        <span class="amount">7 DT</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">{{session('cart.totalPrice')}} DT</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-payment-method">
                                    <h5> Payment method :  Cash on delivery</h5>  
                                    <p class ="my-5">Pay with cash upon delivery.</p>
                                </div>
                                <form  method="post" action="{{ route('checkout.store') }}">
                                    @csrf   
                                    <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Confirm Order</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
            </div>
        </div>
    </main>
    @endsection