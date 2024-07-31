<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware('verified')->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/',[HomeController::class,'show'])->name('/');

Route::get('/contact',[ContactController::class,'show'])->name('contact');
Route::get('/about',function(){
    return view('client.about');
})->name('about');
Route::get('/blog',function(){
    return view('client.blog');
})->name('blog');


require __DIR__.'/auth.php';