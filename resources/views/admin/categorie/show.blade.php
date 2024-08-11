@extends('layouts.app')
@section('title') Categorie @endsection
@section('content')
    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--30 pb_sm--20">
                <div class="container">
                    <div class="row row--50">
                        <div class="col-lg-6 mb--40">
                            <div class="h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="single-product-thumbnail axil-product">
                                        <div class="thumbnail">
                                            <img src="{{ asset('storage/images/categories/' . $categorie->thumbnail ) }}" alt="{{$categorie->name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                            <div class="h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="single-product-content nft-single-product-content">
                                        <div class="inner">
                                            <h2 class="product-title">{{$categorie->name}}</h2>
                                            
                                            <div class="product-additional-info">
                                                <p class="mb--15"><strong>About this Category</strong></p>
                                                <p>{{$categorie->description}}</p>
                                            </div>
                                            

                                            <!-- Start Product Action Wrapper  -->
                                            <div class="product-action-wrapper d-flex-center">
                                                <!-- Start Product Action  -->
                                                <ul class="product-action action-style-two d-flex-center mb--0">
                                                    <li class="add-to-cart">
                                                        <a href="{{route('categories.update',$categorie)}}" class="axil-btn btn-bg-primary">Modify Category</a>
                                                    </li>
                                                    <li class="add-to-cart">
                                                        <a href="{{route('products.create',$categorie)}}" class="axil-btn btn-bg-primary">View products</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                            <div class="nft-short-meta">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="nft-category">
                                                            <label>Category :</label>
                                                            <div class="category-list">
                                                                {{$categorie->name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="nft-verified-option">
                                                            <form style="display:inline;" method="post" action="{{route('categories.destroy',$categorie->id)}}">
                                                                @csrf
                                                                @method('delete')
                                                                <label>Do you want to delete this category ? All related products will be deleted</label>
                                                                <button class="verify-btn axil-btn btn-bg-secondary" >Delete</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white pt--10 pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Related</span>
                    <h2 class="title" >Related Product    </h2>
                    
                    <div class="add-to-cart">
                        <a href="{{route('products.create',$categorie)}}" class="axil-btn btn-bg-primary">Add product</a>
                    </div>

                </div>
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    @foreach($categorie->products as $product)
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-six">
                                <div class="thumbnail">
                                    <a href="{{route('products.show', $product)}}">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="{{ asset('storage/images/products/' . $product->image ) }}" alt="{{$product->name}}">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-price-variant">
                                            <span class="price current-price">{{$product->name}}</span>
                                        </div>
                                        <h5 class="title">
                                            <a href="{{route('products.show',$product)}}"> {{$product->description}}
                                            <span class="verified-icon">
                                                <i class="fas fa-badge-check"></i>
                                            </span>
                                            </a>
                                        </h5>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="select-option"><a href="{{route('products.show',$product)}}">View Product</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
      
                </div>
            </div>
        </div>
    </main>
@endsection
