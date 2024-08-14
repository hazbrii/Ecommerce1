@extends('admin.layouts.app')
@section('title')products @endsection
@section('content')
    @include('admin.modals.product.create')
    @include('admin.modals.product.edit')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Products List</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                        <div class="col">
                            <h4 class="card-title">Manage your products</h4>
                        </div>
                        <div class="col-2">
                        <button
                            class="btn btn-primary btn-round ms-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#createProduct"
                            ><i class="fa fa-plus"></i>Add product</button>
                        </div>
                        
                        </div>
                        <div class="card-body">
                            

                        <div class="table-responsive">
                            <table
                            id="multi-filter-select"
                            class="display table table-striped table-hover"
                            >
                            <thead>
                                <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    @dd($product)
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->categorie->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>Verified</td>
                                    <td>
                                        <div class="form-button-action">
                                        <button
                                            type="button"
                                            title=""
                                            class="btn btn-link btn-primary btn-lg"
                                            data-original-title="Edit Task"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modifyProduct"
                                        >
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button
                                            type="button"
                                            data-bs-toggle="tooltip"
                                            title=""
                                            class="btn btn-link btn-danger"
                                            data-original-title="Remove"
                                        >
                                            <i class="fa fa-times"></i>
                                        </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection