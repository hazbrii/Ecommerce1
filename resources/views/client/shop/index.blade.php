@extends('layouts.app')
@section('title') Shop @endsection
@section('content')

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Shop</li>
                            </ul>
                            <h1 class="title">Explore All Products</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    @include('components.sidebar')
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="axil-shop-top mb--40">
                                    <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                        <!-- Start Single Select  -->
                                        <span class="filter-results">Showing 1-12 of 84 results</span>
                                        <select class="single-select">
                                            <!-- <option>Short by Latest</option> -->
                                            <!-- <option>Short by Oldest</option> -->
                                            <option>Sort by ascending price</option>
                                            <option>Sort by descending price</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                    <div class="d-lg-none">
                                        <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .row -->
                        <div class="row row--15">
                            @foreach(session('filteredProducts') as $product)
                                <div class="col-xl-4 col-sm-6">
                                    <div class="axil-product product-style-one mb--30">
                                        <div class="thumbnail">
                                            <a href="{{route('client.products.show',$product)}}">
                                                <img src="{{asset('storage/images/products/' . $product->image)}}" alt="{{$product->name}}">
                                            </a>
                                            <div class="label-block label-right">
                                                <div class="product-badget">30% OFF</div>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                                    <li class="select-option">
                                                        <a href="" onclick="event.preventDefault();document.getElementById('add_to_cart_{{$product->id}}').submit();">Ajouter au panier</a>
                                                    </li>
                                                    <li class="quickview"><a href="" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <form id='add_to_cart_{{$product->id}}' action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{$product->name}}"> 
                                            <input type="hidden" name="price" value="{{$product->price}}"> 
                                            <input type="hidden" name="quantity" value="1"> 
                                        </form>
                                        <div class="product-content">
                                            <div class="inner">
                                                <h5 class="title"><a href="single-product.html">{{$product->name}}</a></h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">{{$product->price * 0.3}}DT</span>
                                                    <span class="price old-price">{{$product->price}}DT</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                            <!-- End Single Product  -->
                        </div>
                        
                        <div class="text-center pt--20">
                            <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->

    </main>
@endsection


