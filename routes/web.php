<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\CategorieController;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware('verified')->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/categories/{categorie}',[CategorieController::class,'show'])->name('categories.show');
Route::get('/categories',[CategorieController::class,'index'])->name('categories.index');
Route::delete('/categories/{categorie}',[CategorieController::class,'destroy'])->name('categories.destroy');

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