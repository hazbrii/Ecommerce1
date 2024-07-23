<div class="col-lg-9">
    <div class="axil-dashboard-account">
        <form method="post" action="{{ route('profile.update') }}" class="account-details-form">
            @csrf
            @method("patch")
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>FullName</label>
                        <input type="text" class="form-control" name='fullname' value="{{$user->fullname}}" readonly>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-group mb--40">
                        <label>Gouvernorat</label>
                        <select name="gouvernorat" class="select2">
                            <option value="Ben arous" {{ $user->gouvernorat == 'Ben arous' ? 'selected' : '' }}>Ben Arous</option>
                            <option value="Nabeul" {{ $user->gouvernorat == 'Nabeul' ? 'selected' : '' }}>Nabeul</option>
                            <option value="Tunis" {{ $user->gouvernorat == 'Tunis' ? 'selected' : '' }}>Tunis</option>
                            <option value="Kef" {{ $user->gouvernorat == 'Kef' ? 'selected' : '' }}>Kef</option>
                        </select>
                        <p class="b3 mt--10">This will be how your name will be displayed in the account section and in reviews</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name='address' value="{{$user->address}}" required>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="title">Password Change</h5>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name='old_password' value='hazbri' required>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name='password' value='123456' required>
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" name='password_confirmation' value='123456' required>
                    </div>
                    
                    <div class="form-group mb--0">
                        <input type="submit" class="axil-btn btn-primary" value="Save Changes">
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        document.querySelector('.account-details-form').addEventListener('submit', function(event) {
            event.preventDefault();

            Swal.fire({
                title: "Are you sure you want to save the changes?",
                showCancelButton: true,
                confirmButtonText: "Save",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('.account-details-form').submit();
                    Swal.fire("Changes are saved", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endpush