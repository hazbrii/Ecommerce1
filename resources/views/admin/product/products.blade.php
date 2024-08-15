@extends('layouts.app')
@section('title') Categories @endsection
@section('content')

    <main class="main-wrapper">
        <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
            <h2 class="title">Category : {{$categorie->name}}</h2>
                <div class="product-table-heading">
                    <h4 class="title">Manage your products</h4>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-wishlist-table">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-add-cart"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorie->products as $product)
                                <tr>
                                    <td class="product-remove">
                                        <form id="deleteProductForm" style="display:inline;" method="post" action="{{route('products.destroy',$product)}}">
                                            @csrf
                                            @method("delete")
                                            <a class="remove-wishlist" onclick="document.getElementById('deleteProductForm').submit();"><i class="fal fa-times"></i></a>
                                        </form>
                                    </td>
                                    
                                    <td class="product-thumbnail"><a href="single-product.html"><img src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{$categorie->name}}"></a></td>
                                    <td class="product-title">
                                        <a href="{{route('products.show',$product)}}">{{$product->name}}</a>
                                    </td>
                                    <td class="product-add-cart">                                        
                                        <a href="{{route('products.edit',$product)}}" class="axil-btn btn-outline">Modify</a>                                        
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection