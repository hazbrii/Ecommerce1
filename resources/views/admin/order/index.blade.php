@extends('admin.layouts.app')
@section('title')Orders @endsection
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Orders List</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                        <div class="col">
                            <h4 class="card-title">Manage orders</h4>
                        </div>
                        <div class="col-2">
                        <button
                            class="btn btn-primary btn-round ms-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#createProduct"
                            ><i class="fa fa-plus"></i>Add order</button>
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
                                <th>Order Id</th>
                                <th>Date</th>
                                <th>Client Id</th>
                                <th>payment status</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Order Id</th>
                                <th>Date</th>
                                <th>Client Id</th>
                                <th>payment status</th>
                                <th>Status</th>
                                <th>Total</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td><a href ="{{route('orders.show',$order)}}">#{{$order->id}}</a></td>
                                    <td>{{$order->created_at}}</td>
                                    <td><a href ="">#{{$order->user_id}}</a></td>
                                    @if($order->paid == 0 ) 
                                        <td class="text-danger">Not paid</td>
                                    @else
                                        <td class='text-success'>Paid</td>
                                    @endif
                                    @if(in_array($order->status,[0,1,3])){
                                        <td class='text-success'>{{$order->getStatusText()}}</td>
                                    }@elseif($order->status==2){
                                        <td class='text-primary'>{{$order->getStatusText()}}</td>
                                    }@elseif($order->status==4){
                                        <td class='text-warning'>{{$order->getStatusText()}}</td>
                                    }@elseif($order->status==5){
                                        <td class='text-danger'>{{$order->getStatusText()}}</td>
                                    }@else{
                                        <td>Unknown</td>
                                    }
                                    @endif                                    
                                    <td>{{$order->total}}DT</td>
                                    <td>
                                        <div class="form-button-action align-items-center">
                                            <button 
                                            type="button"
                                            class="btn btn-link btn-primary btn-lg"
                                            >
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <form  style="display:inline;" method="post" action="">
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