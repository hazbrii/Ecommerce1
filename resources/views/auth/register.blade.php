
@extends('auth.layouts.app')
@section('title') Register @endsection
@section('content')

<div class="axil-signin-area">
    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <a href="{{route('/')}}" class="site-logo"><img src="./assets/images/logo/logo.png" alt="logo"></a>
            </div>
            <div class="col-md-6">
                <div class="singin-header-btn">
                    <p>Already a member?</p>
                    <a href="{{route('login')}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h3 class="title">We Offer the Best Products</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">I'm New Here</h3>
                    <p class="b2 mb--2">Enter your detail below</p>
                    @if ($errors->any())
                        <div class="alert alert-danger my-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method='post' action="{{route('register')}}" class='my-5'>
                        @csrf
                        
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control" name="fullname" value="hazbri" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="hazbri37@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="hazbri" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="password_confirmation" value="hazbri" required>
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone_number" value="97385709" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="Soliman" required>
                        </div>
                        <div class="form-group">
                            <label>Gouvernorat</label>
                            <select name='gouvernorat' class="form-select-lg">
                                <option value="Nabeul">Nabeul</option>
                                <option value="Tunis">Tunis</option>
                                <option value="Ben Arous">Ben Arous</option>
                                <option value="Kef">Kef</option>
                            </select>
                        </div>

                        <!-- <div class="form-check my-5">
                            <input class="form-check-input" type="checkbox"  value="1"  name="role" id='role'>
                            <label class="form-check-label" for="role">
                                Registre for Admin : 
                            </label>
                        </div> -->
                        
                        <div class="form-group" style='display:none' id='admin-key'>
                            <label>Admin key</label>
                            <input type="text" class="form-control" name="admin_key" value="khatoun"  required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn ">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var roleCheckbox = document.getElementById('role');
        var adminKeyField = document.getElementById('admin-key');

        roleCheckbox.addEventListener('change', function() {
            if (this.checked) {
                adminKeyField.style.display = 'block';
            } else {
                adminKeyField.style.display = 'none';
            }
        });
    });
</script>
