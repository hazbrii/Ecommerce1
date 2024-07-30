@extends('layouts.app')
@section('title') Profile @endsection
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            <h1 class="title">Your Account</h1>
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
                            <div class="media-body">
                                <h5 class="title mb-0">{{$user->fullname}}</h5>
                                @if($user->role==0)
                                    <span class="joining-date">Khatoun Member Since {{$user->created_at}}</span>
                                @else
                                    <span class="joining-date">Khatoun Admin Since {{$user->created_at}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">
                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large" ></i>Dashboard</a>
                                        <a class="nav-item nav-link " data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Orders</a>
                                        <a class="nav-item nav-link " data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home" ></i>Address</a>
                                        <a class="nav-item nav-link"  data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user" ></i>Account Details</a>
                                        <a class="nav-item nav-link"  data-bs-toggle="tab" href='#' role="tab" aria-selected="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Logout</a>
                                        <a class="nav-item nav-link"  data-bs-toggle="tab" href='#' role="tab" aria-selected="false" onclick="confirmation(event)" style='color : red'><i class="fas fa-trash"></i>Delete profile</a>
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
                                    @if($user->email_verified_at != null)
                                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>    
                                    @else
                                        <p>You have to verify you email (we sended you a link).</p>    
                                    @endif
                                    </div>
                                </div>
                                @if($user->email_verified_at!=null)
                                <div class="tab-pane fade"  id="nav-orders" role="tabpanel">
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

                                <div class="tab-pane fade"  id="nav-address" role="tabpanel">
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

                                <div class="tab-pane fade"  id="nav-account" role="tabpanel">
                                    @include('profile.update')
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type='text/javascript'>
        
        function confirmation(event)
        {
            event.preventDefault();
            // var urlToRedirectTo =event.currentTarget.getAttribute('href');
            Swal.fire({
                icon: "warning",
                title: "Are you sure you want to delete your account",
                text : "This action will delete all data relative to this account permanently ",
                color: 'red',
                width : 700 ,
                // input: "password",
                showCancelButton: true,
                confirmButtonText: "Delete",
                confirmButtonColor: "red",
            //     preConfirm: (inputPassword) => {
            //         return fetch('validate-password', {
            //             method: 'POST',
            //             body: JSON.stringify({ password: inputPassword })
            //         })
            //         .then(response => {
            //             // if (response.ok) {
            //             //     throw new Error('Invalid password');
            //             // }
            //             return response.json();
            //         })
            //         .catch(error => {
            //             Swal.showValidationMessage(error.message);
            //         });
            //     }
            })
            .then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.getElementById('delete-form').submit();
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        }
    </script>

    @include('components.footer')
    @endsection
