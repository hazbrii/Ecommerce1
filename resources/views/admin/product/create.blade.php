@extends('layouts.app')
@section('title') Categorie @endsection
@section('content')
    <main class="main-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="signin-form ">
                <h5 class="title"> Category : {{$categorie->name}}</h5>
                <h3 class="title">Create a new product</h3>
                <form action="{{route('products.store',$categorie)}}" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" >
                    </div>
                    <div class="mx-3">
                        <input type="file" accept="image/*" name="image">
                    </div>
                    
                    <div class="form-group d-flex align-items-center justify-content-between mt-3">
                        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create</button>
                    </div>
                </form>
        </div>
    </main>
@endsection
