<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;





Route::middleware('auth')->group(function () {
    
    Route::middleware('client')->group(function () {
        //profile i have to add verified to the others
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->middleware('verified')->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        //shop
        Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
        Route::get('/shop/{categorie}', [ShopController::class, 'show'])->name('shop.show');
        Route::post('/shop', [ShopController::class, 'sort'])->name('shop.sort');
        //product
        Route::get('/products/{product}', [ClientProductController::class, 'show'])->name('client.products.show');
        //cart
        Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
        Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
        Route::post('/cart/product/update', [CartController::class, 'updateProductQuantity'])->name('cart.product.update');
        //checkout
        Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');

        Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
        
    });

    Route::middleware('admin')->group(function () {
        Route::get('admin/categories/create',[CategorieController::class,'create'])->name('categories.create');
        Route::post('admin/categories/create',[CategorieController::class,'store'])->name('categories.store');

        // Route::get('/categories/{categorie}/edit',[CategorieController::class,'edit'])->name('categories.edit');
        // Route::patch('/categories/{categorie}',[CategorieController::class,'update'])->name('categories.update');

        Route::patch('admin/categories/edit',[CategorieController::class,'update'])->name('categories.update');

        Route::get('admin/categories/{categorie}',[CategorieController::class,'show'])->name('categories.show');
        Route::get('admin/categories',[CategorieController::class,'index'])->name('categories.index');
        Route::delete('admin/categories/{categorie}',[CategorieController::class,'destroy'])->name('categories.destroy');

        //products
        Route::get('admin/products',[AdminProductController::class,'index'])->name('products.index');
        Route::get('/admin/products/{product}',[AdminProductController::class,'show'])->name('products.show');

        // Route::get('categories/{categorie}/products/create',[ProductController::class,'create'])->name('products.create');

        Route::post('admin/products/create',[AdminProductController::class,'store'])->name('products.store');

        // Route::post('categories/{categorie}/products/create',[ProductController::class,'store'])->name('products.store');

        Route::get('admin/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
        // Route::patch('/products/{product}',[ProductController::class,'update'])->name('products.update');
        //i have updated the routes because i'm working with modals to edit,create produucts ... (better user experience)
        Route::patch('admin/products/edit',[AdminProductController::class,'update'])->name('products.update');
        Route::delete('admin/products/{product}',[AdminProductController::class,'destroy'])->name('products.destroy');

        Route::get('/admin',[DashboardController::class,'show'])->name('dashboard.show');
        //orders
        Route::get('/admin/orders',[OrderController::class,'index'])->name('orders.index');
        Route::get('/admin/orders/{order}',[OrderController::class,'show'])->name('orders.show');
        Route::patch('admin/orders/{order}/edit',[OrderController::class,'update'])->name('orders.update');
        //users
        Route::get('admin/clients',[ClientController::class,'index'])->name('clients.index');
        Route::get('admin/clients/{client}',[ClientController::class,'show'])->name('clients.show');
    });
});



Route::get('/',[HomeController::class,'show'])->name('/');

Route::get('/contact',function(){
    return view('client.contact');
})->name('contact');
Route::get('/about',function(){
    return view('client.about');
})->name('about');
Route::get('/blog',function(){
    return view('client.blog');
})->name('blog');


require __DIR__.'/auth.php';