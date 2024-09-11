@extends('client.layouts.shopLayout')
@section('shop')
<div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="axil-shop-top mb--40">
                    <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                        <!-- Start Single Select  -->
                        <span class="filter-results">Showing 1-12 of 84 results</span>
                        <form method="post" action="{{route('shop.sort')}}"  id="products-sort">
                            @csrf
                            <select class="single-select" name="sort" onchange="this.form.submit();">
                                <option value="asc" @if(session('sorted')==0 ) selected @endif>Sort by ascending price</option>
                                <option value="desc" @if(session('sorted')==1) selected @endif>Sort by descending price</option>
                            </select>
                        </form>
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
            @foreach($paginatedProducts as $product)
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
                            <input type="hidden" name="image" value="{{$product->image}}"> 
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
            {{ $paginatedProducts->links() }}
        </div>

        <!-- <div class="text-center pt--20">
            <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
        </div> -->
    </div>
    @endsection