<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Stock;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $products = Product::with('categorie','stocks')->get();
        return view('admin.product.index', ['products' => $products,'categories' => $categories]);
    }
    // public function index(Categorie $categorie){
    //     $categorie = Categorie::find($categorie->id);
    //     //inside categorie i have now all the products related
    //     return view('admin.products',['categorie'=>$categorie]);
        
    // }
    public function show(Product $product){
        // $product = Product::find($product->id);
        return view('admin.product.show',['product' => $product]);
    }


    public function store(){
        
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'price'=>['required','numeric'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $path = request()->file('image')->store('images/products', 'public');
            $image = basename($path);
            $product = Product::create([
                'name' => request()->name ,
                'description' => request()->description,
                'price' => request()->price,
                'stock' => request()->stock,
                'image' => $image,
                'categorie_id' => request()->categorie
            ]);
            Stock::create([
                'quantity'=>request()->stock,
                'product_id'=>$product->id
            ]);
        }
        return back();
    }

    public function update(){
        $productId = request()->id;
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' => ['required', 'max:1000',] ,
            'price' => ['required', 'numeric'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        $toUpdateProduct = Product :: find($productId);
        
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $path = request()->file('image')->store('images/products', 'public');
            $image = basename($path);

            $path = 'images/products/' . $toUpdateProduct->image;

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $toUpdateProduct->update([
                'name' => request()->name,
                'description' => request()->description,
                'image' =>$image,
                'price' => request()->price,
                'stock'=>request()->stock
            ]); 
            return back();
        }

        $toUpdateProduct->update([
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock
        ]); 

        return back();
    }
    public function destroy($productId){
        $toDeleteProduct = Product :: find($productId);

        $categorieId = $toDeleteProduct->categorie_id;
        $path = 'images/products/' . $toDeleteProduct->image;

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $toDeleteProduct->delete();
        
        return back();
    
        
    }

}
