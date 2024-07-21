<div class="col-lg-9">
    <div class="axil-dashboard-account">
        <form method='post' action="{{ route('profile.update') }}" class="account-details-form">
            @csrf
            @method('patch')
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
                        <select name='gouvernorat' class="select2">
                            <option value="nabeul">Nabeul </option>
                            <option value="ben arous">Ben Arous </option>
                            <option value="tunis">Tunis</option>
                            <option value="kef">Kef</option>
                        </select>
                        <p class="b3 mt--10">This will be how your name will be displayed in the account section and in reviews</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name='address' value="{{$user->address}}">
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="title">Password Change</h5>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name='old_password' >
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name='password' >
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" name='password_confirmation' >
                    </div>
                    
                    <div class="form-group mb--0">
                        <input type="submit" class="axil-btn" value="Save Changes">
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>