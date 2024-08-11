@extends('layouts.app')
@section('title') Product @endsection
@section('content')
    <main class="main-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row row--50">
                <div class="col-lg-6 mb--40">
                    <div class="h-100">
                        <div class="position-sticky sticky-top">
                            <div class="single-product-thumbnail axil-product">
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{$product->name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb--40">
                    <div class="signin-form ">
                        <h3 class="title">Modify product {{$product->name}}</h3>
                        <form action="{{route('products.update',$product)}}" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description"> {{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price"  value="{{$product->price}}">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name='stock' value="1" id="in_stock" {{ $product->stock == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="in_stock">
                                    En stock
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name='stock' value="0" id="out_stock" {{ $product->stock == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="out_stock">
                                    Out of stock
                                </label>
                            </div>
                            <div class="mx-3">
                                <input type="file" accept="image/*" name="image">
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
