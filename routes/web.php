<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ShopController;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//categories
Route::get('/panel', function(){
    return view('admin.layouts.app');
});


Route::get('/panel/products', [ProductController::class,'index']);
Route::middleware('auth')->group(function () {
    //both client and admin can access profile
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware('verified')->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //shop
    Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
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
        Route::get('/products',[ProductController::class,'index'])->name('products.index');
        Route::get('products/{product}',[ProductController::class,'show'])->name('products.show');

        // Route::get('categories/{categorie}/products/create',[ProductController::class,'create'])->name('products.create');

        Route::post('products/create',[ProductController::class,'store'])->name('products.store');

        // Route::post('categories/{categorie}/products/create',[ProductController::class,'store'])->name('products.store');

        // Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
        // Route::patch('/products/{product}',[ProductController::class,'update'])->name('products.update');
        //i have updated the routes because i'm working with modals to edit,create produucts ... (better user experience)
        Route::patch('/products/edit',[ProductController::class,'update'])->name('products.update');

        Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');
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