<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
class ShopController extends Controller
{
    public function index(Request $request){
        $products = Cache::get('products',collect());
        $categories = Cache::get('categories',collect());
        if ($request->has('filtrer')){
            $request->validate([
                'minPrice' => 'nullable|numeric|min:1',
                'maxPrice' => 'nullable|numeric|min:1',
            ]);
            $minPrice = (float)$request->input('minPrice','1');
            $maxPrice = (float)$request->input('maxPrice','4000');
            if ($minPrice > $maxPrice) {
                return back()->with('error','Minimum price must be less than or equal to maximum price.');
            }
            session()->put('minPrice',$minPrice);
            session()->put('maxPrice',$maxPrice);

            $selectedCategories = $request->input('categories', []);
            if (!empty($selectedCategories)){
                $filteredProducts = $products->whereBetween('price', [$minPrice, $maxPrice])->whereIn('categorie_id',$selectedCategories);
            }else{
                $filteredProducts = $products->whereBetween('price', [$minPrice, $maxPrice]);
            }
            session()->put('filtered',1);
            session()->put('selectedCategories',$selectedCategories);
            session()->put('filteredProducts',$filteredProducts );
        }else{
            $minPrice = $products->min('price');
            $maxPrice = $products->max('price');
            session()->put('minPrice',$minPrice);
            session()->put('maxPrice',$maxPrice);
            session()->put('selectedCategories',[]);
            session()->put('filtered',0);
            $filteredProducts = $products;
            session()->put('filteredProducts',$filteredProducts);
        }
        // $products = Product::paginate(12);
    
        // Current page from request
        $currentPage = $request->get('page', 1);
        
        // Slice the collection to get the items for the current page
        $currentItems = $filteredProducts->slice(($currentPage - 1) * 12, 12)->values();
    
        // Create a LengthAwarePaginator instance
        $paginatedProducts = new LengthAwarePaginator(
            $currentItems,
            $filteredProducts->count(),
            12,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );
        return view('client.shop.index',['paginatedProducts' =>$paginatedProducts]);
    }

    public function show(Categorie $categorie){
        $products = Cache::get('products',collect());
        $minPrice = $products->min('price');
        $maxPrice = $products->max('price');
        session()->put('filtered',1);
        
        session()->put('selectedCategories',[$categorie->id]);
        $filteredProducts = $products->where('categorie_id',$categorie->id);
        session()->put('filteredProducts',$filteredProducts);
        

        $currentPage = $request->get('page', 1);
        
        // Slice the collection to get the items for the current page
        $currentItems = $filteredProducts->slice(($currentPage - 1) * 12, 12)->values();
    
        // Create a LengthAwarePaginator instance
        $paginatedProducts = new LengthAwarePaginator(
            $currentItems,
            $filteredProducts->count(),
            12,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );
        return view('client.shop.index',['paginatedProducts' =>$paginatedProducts]);
    }
    public function sort(Request $request){
        $products = session()->get('filteredProducts',collect());
        if ($request->sort =='desc'){
            session()->put('sorted',1);
            $sortedProducts = $products->sortByDesc('price');
        }else{
            session()->put('sorted',0);
            $sortedProducts = $products->sortBy('price');
        }
        session()->put('filteredProducts',$sortedProducts);
        
        $currentPage = $request->get('page', 1);
        
        // Slice the collection to get the items for the current page
        $currentItems = $sortedProducts->slice(($currentPage - 1) * 12, 12)->values();
    
        // Create a LengthAwarePaginator instance
        $paginatedProducts = new LengthAwarePaginator(
            $currentItems,
            $sortedProducts->count(),
            12,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );
        return view('client.shop.index',['paginatedProducts' =>$paginatedProducts]);
    }

    
}
