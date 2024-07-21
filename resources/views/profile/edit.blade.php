@extends('layouts.app')
@section('title') Profile @endsection
@section('content')

<body class="sticky-header">

    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                            <h1 class="title">Explore All Products</h1>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start My Account Area  -->
        <div class="axil-dashboard-area axil-section-gap">
            <div class="container">
                <div class="axil-dashboard-warp">
                    <div class="axil-dashboard-author">
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/icons/profile.png" width='70' height='70' alt="Hello Annie">
                            </div>
                            <div class="media-body ms-3">
                                <h5 class="title mb-0">{{$user->fullname}}</h5>
                                <span class="joining-date">Khatoun Member Since {{$user->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">
                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Dashboard</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Orders</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Addresses</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Account Details</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href='#' role="tab" aria-selected="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Logout</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href='#' role="tab" aria-selected="false" style='color : red' onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="fas fa-trash"></i>Delete profile</a>
                                    </div>
                                </nav>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>  
                                <form method="post" id='delete-form' action="{{ route('profile.destroy') }}" class="p-6" style="display: none;">
                                    @csrf
                                    @method('delete')
                                </form>
                            </aside>
                        </div>
                        
                        
                        <div class="col-xl-9 col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                    <div class="axil-dashboard-overview">
                                        <div class="welcome-text">Hello {{$user->fullname}} (Wrong account? <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>) 
                                        
                                    </div>
                                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                    <div class="axil-dashboard-order">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                    <div class="axil-dashboard-address">
                                        <p class="notice-text">The following addresses will be used on the checkout page by default.</p>
                                        <div class="row row--30">
                                            <div class="col-lg-6">
                                                <div class="address-info mb--40">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Shipping Address</h4>
                                                        <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>FullName: {{$user->fullname}}</li>
                                                        <li>Email: {{$user->email}}</li>
                                                        <li>Phone: {{$user->phone_number}}</li>
                                                        <li class="mt--30">{{$user->address}} <br>
                                                        {{$user->gouvernorat}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                    @include('profile.update')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    @include('components.footer')
    @endsection