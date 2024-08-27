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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//categories
Route::get('/panel', function(){
    return view('admin.layouts.app');
});

Route::get('/panel/products', [AdminProductController::class,'index']);
Route::middleware('auth')->group(function () {
    //both client and admin can access profile
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware('verified')->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware('client')->group(function () {
        //shop
        Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
        //product
        Route::get('/products/{product}', [ClientProductController::class, 'show'])->name('client.products.show');
        //cart
        Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
        Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
        Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
        Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/categories/create',[CategorieController::class,'create'])->name('categories.create');
        Route::post('/categories/create',[CategorieController::class,'store'])->name('categories.store');

        // Route::get('/categories/{categorie}/edit',[CategorieController::class,'edit'])->name('categories.edit');
        // Route::patch('/categories/{categorie}',[CategorieController::class,'update'])->name('categories.update');

        Route::patch('/categories/edit',[CategorieController::class,'update'])->name('categories.update');

        Route::get('/categories/{categorie}',[CategorieController::class,'show'])->name('categories.show');
        Route::get('/categories',[CategorieController::class,'index'])->name('categories.index');
        Route::delete('/categories/{categorie}',[CategorieController::class,'destroy'])->name('categories.destroy');

        //products
        Route::get('/products',[AdminProductController::class,'index'])->name('products.index');
        Route::get('/admin/products/{product}',[AdminProductController::class,'show'])->name('products.show');

        // Route::get('categories/{categorie}/products/create',[ProductController::class,'create'])->name('products.create');

        Route::post('products/create',[AdminProductController::class,'store'])->name('products.store');

        // Route::post('categories/{categorie}/products/create',[ProductController::class,'store'])->name('products.store');

        // Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
        // Route::patch('/products/{product}',[ProductController::class,'update'])->name('products.update');
        //i have updated the routes because i'm working with modals to edit,create produucts ... (better user experience)
        Route::patch('/products/edit',[AdminProductController::class,'update'])->name('products.update');

        Route::delete('/products/{product}',[AdminProductController::class,'destroy'])->name('products.destroy');
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