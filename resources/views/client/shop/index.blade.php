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
                    <div class="col-lg-3">
                        <div class="axil-shop-sidebar">
                            <div class="d-lg-none">
                                <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="toggle-list product-categories active">
                                <h6 class="title">CATEGORIES</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        @foreach($categories as $categorie)
                                            <li><a href="#">{{$categorie->name}}</a></li>
                                        @endforeach
                                        <li class="current-cat"><a href="#">Sun Care</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-categories product-gender active">
                                <h6 class="title">GENDER</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">Men (40)</a></li>
                                        <li><a href="#">Women (56)</a></li>
                                        <li><a href="#">Unisex (18)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-color active">
                                <h6 class="title">COLORS</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#" class="color-extra-01"></a></li>
                                        <li><a href="#" class="color-extra-02"></a></li>
                                        <li><a href="#" class="color-extra-03"></a></li>
                                        <li><a href="#" class="color-extra-04"></a></li>
                                        <li><a href="#" class="color-extra-05"></a></li>
                                        <li><a href="#" class="color-extra-06"></a></li>
                                        <li><a href="#" class="color-extra-07"></a></li>
                                        <li><a href="#" class="color-extra-08"></a></li>
                                        <li><a href="#" class="color-extra-09"></a></li>
                                        <li><a href="#" class="color-extra-10"></a></li>
                                        <li><a href="#" class="color-extra-11"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="toggle-list product-size active">
                                <h6 class="title">SIZE</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                        <li><a href="#">3XL</a></li>
                                        <li><a href="#">4XL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-price-range active">
                                <h6 class="title">PRICE</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">30</a></li>
                                        <li><a href="#">5000</a></li>
                                    </ul>
                                    <form action="#" class="mt--25">
                                        <div id="slider-range"></div>
                                        <div class="flex-center mt--20">
                                            <span class="input-range">Price: </span>
                                            <input type="text" id="amount" class="amount-range" readonly>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button class="axil-btn btn-bg-primary">Filtrer</button>
                        </div>
                        <!-- End .axil-shop-sidebar -->
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="axil-shop-top mb--40">
                                    <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                        <!-- Start Single Select  -->
                                        <span class="filter-results">Showing 1-12 of 84 results</span>
                                        <select class="single-select">
                                            <option>Short by Latest</option>
                                            <option>Short by Oldest</option>
                                            <option>Short by Name</option>
                                            <option>Short by Price</option>
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
                            @foreach($categories as $categorie)
                                @foreach($categorie->products as $product)
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


