@extends('layouts.app')
@section('title') Categories @endsection
@section('content')

    <main class="main-wrapper">
        <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
                <div class="product-table-heading">
                    <h4 class="title">Manage your categories</h4>
                    <a href="{{route('categories.create')}}" class="axil-btn btn-outline ">Add Category </a>                                        
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-wishlist-table">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Categorie</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-add-cart"></th>
                                <th scope="col" class="product-add-cart"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $categorie)
                                <tr>
                                    <td class="product-remove">
                                        <form id="deleteForm" style="display:inline;" method="post" action="{{route('categories.destroy',$categorie->id)}}">
                                            @csrf
                                            @method("delete")
                                            <a class="remove-wishlist" onclick="document.getElementById('deleteForm').submit();"><i class="fal fa-times"></i></a>
                                        </form>
                                    </td>
                                    
                                    <td class="product-thumbnail"><img src="{{ asset('storage/images/categories/' . $categorie->thumbnail) }}" alt="{{$categorie->name}}"></td>
                                    <td class="product-title">
                                        <a href="{{route('categories.show',$categorie)}}">{{$categorie->name}}</a>
                                    </td>
                                    <td class="product-add-cart">                                        
                                        <a href="{{route('categories.edit',$categorie)}}" class="axil-btn btn-outline">Modify</a>                                        
                                    </td>
                                    <td class="product-add-cart ">                                        
                                        <a href="{{route('products.index',$categorie)}}" class="axil-btn btn-outline btn-bg-primary">View products </a>                                        
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