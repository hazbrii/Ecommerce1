<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-5">
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="{{route('/')}}" class="logo logo-dark">
                            <img src="{{ asset('assets/images/logo/logo.png')}}" alt="Khatoun">
                        </a>
                        <a href="{{route('/')}}" class="logo logo-light">
                            <img src="{{ asset('assets/images/logo/logo-light.png')}}" alt="Khatoun">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.html" class="logo">
                                    <img src="assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li><a href="{{route('shop.index')}}">Shop</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                            <ul class="action-list">
                                <li class="axil-search">
                                    <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                        <i class="flaticon-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        @if (session()->has('cart'))<span class="cart-count">{{count(session('cart.products'))}}</span>@endif
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </li>
                                @auth
                                    @include('client.partials.profile')
                                @else
                                <li>
                                    <a href="{{ route('login') }}" class="axil-btn btn-bg-primary" style="font-size: 18px; padding: 5px 10px;">Login</a>
                                </li>
                                <li>
                                <div >
                                    No account yet? <a href="{{route('register')}}" class="btn-link">Register here</a>
                                </div>
                                </li>   
                                @endauth
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
        <!-- End Mainmenu Area -->
         
        @include('client.partials.cart')
        @include('client.partials.search')
    </header>




