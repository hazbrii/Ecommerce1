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
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
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
                                <img src="assets/images/logo/logo.png" alt="Site Logo">
                            </a>
                            <a href="{{route('/')}}" class="logo logo-light">
                                <img src="assets/images/logo/logo-light.png" alt="Site Logo">
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
                                <li class="wishlist">
                                    <a href="wishlist.html">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </li>
                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        <span class="cart-count">3</span>
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
                                    No account yet? <a href="{{route('register')}}" class="btn-link">REGISTER HERE.</a>
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
                                    <img src="assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="{{route('/')}}">Home</a></li>
                                
                                </li> 
                                <li><a href="shop-sidebar.html">Shop</a></li>
                                
                                
                                <li class="menu-item-has-children">
                                    <a href="#">Categories</a>
                                    <ul class="axil-submenu">
                                        <li><a href="#">Barette</a></li>
                                        <li><a href="#">Base metals</a></li>
                                        <li><a href="#">Estate Jawellery</a></li>
                                        <li><a href="#">Foilbacks</a></li>
                                        <li><a href="#">Kalabubu</a></li>
                                        <li><a href="#">Medallion</a></li>
                                        <li><a href="#">Nawarat Ring</a></li>
                                        <li><a href="#">Anklet</a></li>
                                        <li><a href="#">Pledge Pins</a></li>
                                        <li><a href="#">Prayer Jewellery</a></li>
                                        <li><a href="#">Slave Bracelet</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area  -->
    </header>