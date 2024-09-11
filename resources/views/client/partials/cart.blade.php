<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Cart review</h2>
            <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
        </div>
        @if((session()->has('cart'))) 
        <div class="cart-body">
                <ul class="cart-item-list">
                @foreach(session('cart.products') as $productId => $product)
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{ route('client.products.show',$productId) }}"><img src="{{ asset( 'storage/images/products/' . $product['image'] )}}" alt="{{$product['name']}}"></a>
                            <form action="{{ route('cart.remove') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $productId }}">
                                <button type="submit" class="close-btn"><i class="fas fa-times"></i></button>
                            </form>   
                            
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="{{ route('client.products.show',$productId) }}">{{$product['name']}}</a></h3>
                            <div class="item-price">{{$product['price']}} <span class="currency-symbol">DT</span></div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" name="quantity" value="{{$product['quantity']}}">
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Subtotal:</span>
                <div class="cart-update-btn-area">
                <div class="update-btn">
                    <a href="" class="axil-btn btn-outline">Update Subtotal</a>
                </div>
            </div>
                <span class="subtotal-amount">{{session('cart')['totalPrice']}} DT</span>
            </h3>
            
            <button class="axil-btn btn-bg-secondary">
                <a href="{{route('checkout.show')}}" class="text-white">Checkout</a>
            </button>
        </div>
        @else 
                <p>Empty Cart (No product added ) </p>
        @endif
    </div>
</div>