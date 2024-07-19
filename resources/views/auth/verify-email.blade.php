@extends('layouts.master')
@section('title') Verify email @endsection
@section('content')
<div class="comming-soon-area">
    <div class="row align-items-center">
        <div class="col-xl-4 col-lg-6">
            <div class="comming-soon-banner bg_image bg_image--13"></div>
        </div>
        <div class="col-lg-5 offset-xl-1">
            <div class="comming-soon-content">
                <div class="brand-logo">
                    <img src="../assets/images/logo/logo-large.png" alt="Logo">
                </div>
                <h2 class="title">You have successfully created your account</h2>
                <p>Now to continue you have to verify your email by clicking on the email we just sent to you 
                    <br> If you haven't receive anything, click on Resend verification email </p>
                <form method='post' action="{{route('verification.send')}}">
                    <button type="submit">Resend Email Verification</button>
                </form>
                <!-- <div class="coming-countdown countdown"></div> -->
            </div>
        </div>
    </div>
</div>
@endsection