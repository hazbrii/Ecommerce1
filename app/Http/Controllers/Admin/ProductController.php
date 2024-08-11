<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{

    public function index(Categorie $categorie){
        $categorie = Categorie::find($categorie->id);
        //inside categorie i have now all the products related
        return view('admin.product.index',['categorie'=>$categorie]);
        
    }
    public function show(Product $product){
        // $product = Product::find($product->id);
        return view('admin.product.show',['product' => $product]);
    }
    public function create(Categorie $categorie){
        return view('admin.product.create',['categorie'=>$categorie]);
    }


    public function store(Categorie $categorie){
        
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'price'=>['required','numeric'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $path = request()->file('image')->store('images/products', 'public');
            $image = basename($path);
            Product::create([
                'name' => request()->name ,
                'description' => request()->description,
                'price' => request()->price,
                'stock' => 1 ,
                'image' => $image,
                'categorie_id' => $categorie->id
            ]);
            return to_route('categories.show',$categorie);
        }
        return back();
    }

    public function edit(Product $product){
        return view('admin.product.edit',['product' => $product] );
    }
    public function update($productId){
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
            return to_route('products.show',$productId);
        }

        $toUpdateProduct->update([
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock
        ]); 

        return to_route('products.show',$productId);
    }
    public function destroy($productId){
        $toDeleteProduct = Product :: find($productId);

        $categorieId = $toDeleteProduct->categorie_id;
        $path = 'images/products/' . $toDeleteProduct->image;

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $toDeleteProduct->delete();
        
        return redirect()->route('products.index', $categorieId);
    
        
    }

}
