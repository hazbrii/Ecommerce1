@extends('admin.layouts.app')
@section('title') Orders @endsection
@section('content')
<div
    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
>
<h3 class="fw-bold mb-3">Orders</h3>
</div>
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category">Today's Orders</p>
                    <h4 class="card-title">15</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category"><span class="badge badge-info">Pending Orders </span></p>
                    <h4 class="card-title">150</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category"><span class="badge badge-danger">Cancelled Orders</span></p>
                    <h4 class="card-title">150GB</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category">Total Orders</p>
                    <h4 class="card-title">150</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category"><span class="badge badge-success">Completed Orders</span></p>
                    <h4 class="card-title">150</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category">Completed Orders This Week</p>
                    <h4 class="card-title">150GB</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category">Completed Orders This Month</p>
                    <h4 class="card-title">150GB</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="numbers">
                    <p class="card-category">Completed Orders This Year</p>
                    <h4 class="card-title">150GB</h4>
                </div>
            </div>
        </div>
    </div>
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
    <div class="table-responsive" >
        <table
        id="basic-datatables"
        class="display table table-striped table-hover"
        >
        <thead >
            <tr>
                <th >#</th>
                <th >Date</th>
                <th >Client</th>
                <th >Payment</th>
                <th >Status</th>
                <th >Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td><a href ="{{route('orders.show',$order)}}">#{{$order->id}}</a></td>
                <td>{{$order->created_at}}</td>
                <td><a href ="">#{{$order->user_id}}</a></td>
                @if($order->paid == 0 ) 
                    <td class="text-center"><span class="badge badge-danger">Unpaid</span></td>
                @else
                    <td class='text-center'><span class="badge badge-success">Paid</span></td>
                @endif

                @if(in_array($order->status,[0,1,3]))
                    <td class='text-center'><span class="badge badge-success">{{$order->getStatusText()}}</span></td>
                @elseif($order->status==2)
                    <td class='text-center'><span class="badge badge-primary">{{$order->getStatusText()}}</span></td>
                @elseif($order->status==4)
                    <td class='text-center'><span class="badge badge-warning">{{$order->getStatusText()}}</span></td>
                @elseif($order->status==5)
                    <td class='text-center'><span class="badge badge-danger">{{$order->getStatusText()}}</span></td>
                @else
                    <td>Unknown</td>
                
                @endif                                    
                <td>{{$order->total}}DT</td>
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