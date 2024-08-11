@extends('layouts.app')
@section('title') Categorie @endsection
@section('content')
    <main class="main-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row row--50">
                <div class="col-lg-6 mb--40">
                    <div class="h-100">
                        <div class="position-sticky sticky-top">
                            <div class="single-product-thumbnail axil-product">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/images/categories/' . $categorie->thumbnail) }}" alt="{{$categorie->name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb--40">
                    <div class="signin-form ">
                        <h3 class="title">Modify category</h3>
                        <form action="{{route('categories.update',$categorie)}}" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$categorie->name}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description">{{$categorie->description}}</textarea>
                            </div>
                            <div class="mx-3">
                                <input type="file" accept="image/*" name="thumbnail">
                            </div>
                            
                            <div class="form-group d-flex align-items-center justify-content-between mt-3">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Modify</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
