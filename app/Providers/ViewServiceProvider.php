<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

use App\Models\Categorie;
use App\Models\Product;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (!Cache::has('categories')) {
                Cache::put('categories', Category::all());
            }
            
            if (!Cache::has('products')) {
                Cache::put('products', Product::all());
            }
            $categories = Cache::get('categories');
            $products = Cache::get('products');
            $view->with([
                'categories' => $categories, // Replace with actual data
                'products' => $products, // Replace with actual data
            ]);
        });
    }
}
