@extends('admin.layouts.app')
@section('title')products @endsection
@section('content')
    @include('admin.product.modals.create')
    @include('admin.product.modals.edit')

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
                            id="basic-datatables"
                            class="display table table-striped table-hover"
                            >
                            <thead>
                                <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                
                                <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src=" {{asset('storage/images/products/' .  $product->image  )}} "  
                                        style="width: 50px;
                                        height: 50px;
                                        border: 1px solid #ccc;
                                        padding: 5px;
                                        border-radius: 5px;
                                        object-fit: cover;" >

                                          {{$product->name}}
                                    </td>
                                    <td>{{$product->categorie->name}}</td>
                                    <td>{{$product->price}}DT</td>
                                    <td>{{$product->stock}}</td>
                                    <td>
                                        <div class="form-button-action align-items-center">
                                            <button 
                                            type="button"
                                            class="btn btn-link btn-primary btn-lg"
                                            data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}"
                                            data-description="{{ $product->description }}"
                                            data-category="{{ $product->categorie->name }}"
                                            data-price="{{ $product->price }}"
                                            data-stock="{{ $product->stock }}"
                                            data-original-title="Edit Task"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modifyProduct"
                                            onclick="populateModal(this)"
                                            >
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <form  style="display:inline;" method="post" action="{{route('products.destroy',$product)}}">
                                                @csrf
                                                @method("delete")
                                                <button
                                                type="submit"
                                                data-bs-toggle="tooltip"
                                                title=""
                                                class="btn btn-link btn-danger"
                                                data-original-title="Remove"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                            </div>   
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

<script>
    function populateModal(button) {
        // Retrieve product data from the button's data attributes
        const productId = button.getAttribute('data-id');
        const productName = button.getAttribute('data-name');
        const productDescription = button.getAttribute('data-description');
        const productCategory = button.getAttribute('data-category');
        const productPrice = button.getAttribute('data-price');
        const productStock = button.getAttribute('data-stock');
        // Populate the modal fields
        document.getElementById('edit-product-id').value = productId;
        document.getElementById('edit-product-name').value = productName;
        document.getElementById('edit-product-description').value = productDescription;
        document.getElementById('edit-product-category').selected = productCategory;
        document.getElementById('edit-product-price').value = productPrice;
        document.getElementById('edit-product-stock').value = productStock;
    }
</script>
@endsection