@extends('layouts.app')
@section('title') Home @endsection
@section('content')
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    

    <main class="main-wrapper">
        <!-- Start Slider Area -->
        <div class="axil-main-slider-area main-slider-style-7 bg_image--8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="main-slider-content">
                            <span class="subtitle"><i class="fas fa-fire"></i>Hot Deal In Diamond</span>
                            <h1 class="title">Exclusive Design Collection</h1>
                            <p>Casual line with short design in 100% suede Diamond</p>
                            <div class="shop-btn">
                                <a href="shop.html" class="axil-btn btn-bg-secondary right-icon">Browse Item <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster axil-section-gap pb--0">
            <div class="container">
                <div class="row g-lg-5 g-4">
                    <div class="col-lg-6">
                        <div class="single-poster">
                            <a href="shop.html">
                                <img src="./assets/images/product/poster/poster-08.png" alt="eTrade promotion poster">
                                <div class="poster-content">
                                    <div class="inner">
                                        <h3 class="title">Premimum <br> Quality.</h3>
                                        <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single-poster">
                            <a href="shop-sidebar.html">
                                <img src="./assets/images/product/poster/poster-09.png" alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title">50% Offer In Winter</span>
                                        <h3 class="title">Get Exclusive <br> Diamond</h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axil Product Poster Area  -->

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
            <div class="container ml--xxl-0">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> This Week’s</span>
                        <h2 class="title">New Arrivals</h2>
                    </div>
                    <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-1.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$80</span>
                                            <span class="price current-price">$60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-2.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-3.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">15% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-4.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-5.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-3.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">15% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-4.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-5.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->

        <!-- Start Best Sellers Product Area  -->
        <div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>This Month</span>
                        <h2 class="title">Best Sellers</h2>
                    </div>
                    <div class="new-arrivals-product-activation-2 slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-6.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(18)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$30</span>
                                            <span class="price old-price">$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-7.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                            <span class="rating-number">(24)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$80</span>
                                            <span class="price old-price">$100</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-8.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                            <span class="rating-number">(34)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Necklace Earring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-9.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(14)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Earring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$30</span>
                                            <span class="price old-price">$35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-10.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(11)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-11.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                            <span class="rating-number">(14)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond LOCKET</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-12.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                            <span class="rating-number">(24)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Denim Black Jacket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$20</span>
                                            <span class="price old-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-13.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                            <span class="rating-number">(24)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-three">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-14.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(64)</span>
                                        </div>
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$40</span>
                                            <span class="price old-price">$60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Best Sellers Product Area  -->

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Categories</span>
                    <h2 class="title">Browse by Category</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-2.png" alt="product categorie">
                                <h6 class="cat-title">Barrette</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-3.png" alt="product categorie">
                                <h6 class="cat-title">Base metals</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-4.png" alt="product categorie">
                                <h6 class="cat-title">Estate Jewellery</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-5.png" alt="product categorie">
                                <h6 class="cat-title">Foilbacks</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="600" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-6.png" alt="product categorie">
                                <h6 class="cat-title">Kalabubu</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-7.png" alt="product categorie">
                                <h6 class="cat-title">Medallion</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-8.png" alt="product categorie">
                                <h6 class="cat-title">Nawarat ring</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-1.png" alt="product categorie">
                                <h6 class="cat-title">Anklet</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-9.png" alt="product categorie">
                                <h6 class="cat-title">Pledge Pins</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-10.png" alt="product categorie">
                                <h6 class="cat-title">Prayer Jewellery</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-11.png" alt="product categorie">
                                <h6 class="cat-title">Slave bracelet</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-12.png" alt="product categorie">
                                <h6 class="cat-title">Pledge Pins</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product">
                            <a href="#">
                                <img class="img-fluid" src="./assets/images/product/categories/jewelry-13.png" alt="product categorie">
                                <h6 class="cat-title">Medallion</h6>
                            </a>
                        </div>
                        <!-- End .categrie-product -->
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Start Testimonila Area  -->
        <div class="axil-testimoial-area axil-section-gap bg-vista-white">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Testimonials</span>
                    <h2 class="title">Users Feedback</h2>
                </div>
                <!-- End .section-title -->
                <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-1.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-2.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-3.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-2.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Testimonila Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--80">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Our Products</span>
                        <h2 class="title">Explore our Products</h2>
                    </div>
                    <div class="row row--15">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-11.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-12.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$30</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-13.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$45</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-14.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$80</span>
                                            <span class="price current-price">$60</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-15.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">50% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Earring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$38</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-1.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$25</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-2.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">40% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$25</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-3.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-4.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-5.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">15% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$30</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-6.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$45</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-7.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$80</span>
                                            <span class="price current-price">$60</span>
                                        </div>
                                        <div class="color-variant-wrapper">
                                            <ul class="color-variant">
                                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-02"><span><span class="color"></span></span>
                                                </li>
                                                <li class="color-extra-03"><span><span class="color"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product  -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt--20 mt_sm--0">
                            <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Expolre Product Area  -->

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--50">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> This Week’s</span>
                    <h2 class="title">New Arrivals</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-10.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">10% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$40</span>
                                        <span class="price current-price">$30</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-11.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">25% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Locket</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$40</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-12.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">15% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$60</span>
                                        <span class="price current-price">$45</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-13.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30</span>
                                        <span class="price current-price">$20</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/jewellery/product-14.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$25</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/jewellery/product-15.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">15% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Earring</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$60</span>
                                        <span class="price current-price">$45</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/jewellery/product-4.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30</span>
                                        <span class="price current-price">$20</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-two has-color-pick">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/jewellery/product-5.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$25</span>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action justify-content-center">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->


        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--11">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

    </main>


    
    @include('components.footer')

    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="assets/images/product/product-big-01.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="assets/images/product/product-big-01.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="assets/images/product/product-big-02.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="assets/images/product/product-big-02.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="assets/images/product/product-big-03.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="assets/images/product/product-big-03.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="assets/images/icons/rate.png" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.html"><img src="assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.html"><img src="assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.html"><img src="assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.html">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

@endsection