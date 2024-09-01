<header class="header axil-header header-style-4">

        <!-- for discount -->
        <!-- <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <div class="campaign-countdown"></div>
                    <p>Open Doors To A World Of Fashion Get <a href="#">Get Your Offer</a></p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div> -->
        <!-- Start Header Top Area  -->
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-12">
                        <div class="header-top-dropdown dropdown-box-style">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">DT</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    EN
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EN</a></li>
                                    <li><a class="dropdown-item" href="#">ARB</a></li>
                                    <li><a class="dropdown-item" href="#">SPN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-5">
                        <div class="header-brand">
                            <a href="{{route('/')}}" class="logo logo-dark">
                                <img src="{{ asset('assets/images/logo/logo.png')}}" alt="Site Logo">
                            </a>
                            <a href="{{route('/')}}" class="logo logo-light">
                                <img src="{{ asset('assets/images/logo/logo-light.png')}}" alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-7">
                        <div class="header-action">
                            <ul class="action-list">
                                <li class="axil-search">
                                    <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                        <i class="flaticon-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        <span class="cart-count">3</span>
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="wishlist.html">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </li>
                                <li class="shopping-cart">
                                <a href="{{ route('cart.show') }}" >
                                    <!-- <a href="{{ route('cart.show') }}" class="cart-dropdown-btn"> -->
                                        <!-- <span class="cart-count">3</span> -->
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </li>
                                @auth
                                <li class="my-account">
                                    <a href="javascript:void(0)">
                                        <i class="flaticon-person"></i>
                                    </a>
                                    <div class="my-account-dropdown">
                                        <!-- <span class="title">QUICKLINKS</span> -->
                                        <ul>
                                            <li>
                                                <a href="{{route('profile.edit')}}">My Account</a>
                                            </li>
                                            <li>
                                                <a href="#">Initiate return</a>
                                            </li>
                                            <li>
                                                <a href="#">Support</a>
                                            </li>
                                            <li>
                                                <a href="#">Language</a>
                                            </li>
                                            <li>
                                                <a href=""  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>  
                                            
                                        </ul>
                                        
                                        
                                    </div>
                                </li>
                                @endauth
                                @guest
                                <li>
                                    <a href="{{ route('login') }}" class="axil-btn btn-bg-primary" style="font-size: 18px; padding: 5px 10px;">Login</a>
                                </li>
                                <li>
                                <div >
                                    No account yet? <a href="{{route('register')}}" class="btn-link">Register here</a>
                                </div>
                                </li>
                                        
                                @endguest
                                <li class="axil-mobile-toggle">
                                    <button class="menu-btn mobile-nav-toggler">
                                        <i class="flaticon-menu-2"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area  -->
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
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="{{route('/')}}" class="logo">
                                    <img src="{{ asset('assets/images/logo/logo.png')}}" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="{{route('shop.index')}}">Home</a></li>
                                
                                </li> 
                                <li class="menu-item-has-children">
                                    <a href="#">Categories</a>
                                    <ul class="axil-submenu">
                                        @foreach($categories as $categorie)
                                            <li><a href="{{route('shop.show',$categorie)}}">{{$categorie->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area  -->
    </header>