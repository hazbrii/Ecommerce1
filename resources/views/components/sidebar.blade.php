
<div class="col-lg-3">
    <form action="{{route('shop.index')}}">
    @csrf
        <div class="axil-shop-sidebar">
            <div class="d-lg-none">
                <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
            </div>
            <div class="toggle-list product-categories active">
                <h6 class="title">CATEGORIES</h6>
                <div class="shop-submenu">
                    <ul>
                        @foreach($categories as $categorie)
                        <ul>
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$categorie->id}}" id="{{$categorie->id}}" 
                                name="categories[]" @if ( in_array($categorie->id, session('selectedCategories') )) checked @endif>
                                <label class="form-check-label" for="{{$categorie->id}}">
                                {{$categorie->name}}                                           
                                </label>
                            </li>
                        </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="toggle-list product-categories product-gender active">
                <h6 class="title">GENDER</h6>
                <div class="shop-submenu">
                    <ul>
                        <li class="chosen"><a href="#">Men (40)</a></li>
                        <li><a href="#">Women (56)</a></li>
                        <li><a href="#">Unisex (18)</a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle-list product-color active">
                <h6 class="title">COLORS</h6>
                <div class="shop-submenu">
                    <ul>
                        <li class="chosen"><a href="#" class="color-extra-01"></a></li>
                        <li><a href="#" class="color-extra-02"></a></li>
                        <li><a href="#" class="color-extra-03"></a></li>
                        <li><a href="#" class="color-extra-04"></a></li>
                        <li><a href="#" class="color-extra-05"></a></li>
                        <li><a href="#" class="color-extra-06"></a></li>
                        <li><a href="#" class="color-extra-07"></a></li>
                        <li><a href="#" class="color-extra-08"></a></li>
                        <li><a href="#" class="color-extra-09"></a></li>
                        <li><a href="#" class="color-extra-10"></a></li>
                        <li><a href="#" class="color-extra-11"></a></li>
                    </ul>
                </div>
            </div>

            <div class="toggle-list product-size active">
                <h6 class="title">SIZE</h6>
                <div class="shop-submenu">
                    <ul>
                        <li class="chosen"><a href="#">XS</a></li>
                        <li><a href="#">S</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">XL</a></li>
                        <li><a href="#">XXL</a></li>
                        <li><a href="#">3XL</a></li>
                        <li><a href="#">4XL</a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle-list active">
                <h6 class="title">PRICE</h6>
                <div class="row shop-submenu">

                    <div class="form-group col-6">
                        <label for="max_price">Minimum : </label>
                        <input type="text" id="min" name="minPrice" class="form-control" value="{{session('minPrice') ?? 1}}"  >
                    </div>
                    <div class="form-group col-6">
                        <label for="max_price">Maximum :</label>
                        <input type="text" id="max_price" name="maxPrice" class="form-control" value="{{session('maxPrice') ?? 4000}}">
                    </div>
                </div>
            </div>
            <button type='submit' class="axil-btn btn-bg-primary" name="filtrer">Filtrer</button>
        </div>
        <!-- End .axil-shop-sidebar -->
    </form>
</div>
