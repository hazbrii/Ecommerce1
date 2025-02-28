<div
    class="modal fade"
    id="createCategory"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
    >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    Create a new category
                </h5>
            </div>
            <div class="modal-body">
                <p class="small">
                Create a new category using this form, make sure you
                fill them all
                </p>
                <div class="signin-form ">
                    <form action="{{route('categories.store')}}" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-1">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group mt-1">
                            <label>Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="mx-3">
                            <input type="file" accept="image/*" name="image">
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-3">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
