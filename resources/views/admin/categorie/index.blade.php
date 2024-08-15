@extends('admin.layouts.app')
@section('title')products @endsection
@section('content')
    @include('admin.categorie.modals.create')
    @include('admin.categorie.modals.edit')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Categories List</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header row">
                        <div class="col">
                            <h4 class="card-title">Manage your categories</h4>
                        </div>
                        <div class="col-2">
                        <button
                            class="btn btn-primary btn-round ms-auto"
                            data-bs-toggle="modal"
                            data-bs-target="#createCategory"
                            ><i class="fa fa-plus"></i>Add Category</button>
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
                                    <th>Category Name</th>
                                    <th>Number of products</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Number of products</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <img src=" {{asset('storage/images/categories/' .  $category->image  )}} "  
                                        style="width: 50px;
                                        height: 50px;
                                        border: 1px solid #ccc;
                                        padding: 5px;
                                        border-radius: 5px;
                                        object-fit: cover;" >

                                          {{$category->name}}
                                    </td>
                                    <td>10</td>
                                    <td>Verified</td>
                                    <td>
                                        <div class="form-button-action align-items-center">
                                            
                                            <button 
                                            type="button"
                                            class="btn btn-link btn-primary btn-lg"
                                            data-id="{{ $category->id }}"
                                            data-name="{{ $category->name }}"
                                            data-description="{{ $category->description }}"
                                            data-original-title="Edit Task"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modifyCategory"
                                            onclick="populateModal(this)"
                                            >
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <form  style="display:inline;" method="post" action="{{route('categories.destroy',$category)}}">
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
        const categoryId = button.getAttribute('data-id');
        const categoryName = button.getAttribute('data-name');
        const categoryDescription = button.getAttribute('data-description');

        // Populate the modal fields
        document.getElementById('edit-category-id').value = categoryId;
        document.getElementById('edit-category-name').value = categoryName;
        document.getElementById('edit-category-description').value = categoryDescription;

    }
</script>
@endsection