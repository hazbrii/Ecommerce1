<div
    class="modal fade"
    id="modifyProduct"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
    >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    Modify product
                </h5>
            </div>
            <div class="modal-body">
                <p class="small">
                    Create a new Product using this form, make sure you
                    fill them all
                </p>
                <div class="signin-form ">
                    <h3 class="title">Modify product bracelet</h3>
                    <form action="" method='post' class="singin-form mt-3" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group mt-1">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <div class="form-group mt-1">
                            <label>Description</label>
                            <textarea name="description"> </textarea>
                        </div>
                        <div class="form-group mt-1">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price"  value="">
                        </div>
                        <div class="form-group mt-1">
                            <label>Stock</label>
                            <input type="text" class="form-control" name="stock"  value="">
                        </div>
                        <div class="form-group mt-1">
                            <label>Category</label>
                            <select class="form-select">
                                @foreach($categories as $categorie)
                                    <option>{{$categorie->name}}</option>
                                @endforeach
                            </select>
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
</div>

