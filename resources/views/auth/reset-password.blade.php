
@extends('layouts.master')
@section('title') Reset password @endsection
@section('content')
<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-xl-4 col-sm-6">
                    <a href="{{route('/')}}" class="site-logo"><img src="../assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-md-2 d-lg-block d-none">
                    <a href="{{route('password.email')}}" class="back-btn"><i class="far fa-angle-left"></i></a>
                </div>

            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h2 class="title">We Offer the Best Products</h2>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title mb--35">Reset Password</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method='post' action="{{ route('password.store') }}" class="singin-form mt-2" >
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <input type="hidden" name="email" value="{{ $request->email  }}" >
                            
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control" name="password" value="123456789">
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" value="123456789">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection