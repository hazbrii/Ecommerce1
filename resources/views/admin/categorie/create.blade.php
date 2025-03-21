@extends('layouts.app')
@section('title') Categorie @endsection
@section('content')
    <main class="main-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="signin-form ">
                <h3 class="title">Create a new category</h3>
                <form action="{{route('categories.store')}}" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="mx-3">
                        <input type="file" accept="image/*" name="thumbnail">
                    </div>
                    
                    <div class="form-group d-flex align-items-center justify-content-between mt-3">
                        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create</button>
                    </div>
                </form>
        </div>
    </main>
@endsection
