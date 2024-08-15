<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Categorie;


class CategorieController extends Controller
{
    public function index(){
        $categories= Categorie :: all();// collection object   
        return view('admin.categorie.index',
            ['categories' => $categories]
        );
    }
    // public function index(){
    //     $categories= Categorie :: all();// collection object   
    //     return view('admin.categorie.index',
    //         ['categories' => $categories]
    //     );
    // }
    public function show(Categorie $categorie){
        $categorie = Categorie::find($categorie->id);
        //products already exists in $categorie variable acces it through( $categorie->products)
        return view('admin.categorie.show',['categorie' => $categorie]);
    }
    
    // public function create(){
    //     return view('admin.categorie.create');
    // }
    public function store(){
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $path = request()->file('image')->store('images/categories', 'public');
            $image = basename($path);
            
            Categorie::create([
                'name' =>request()->name ,
                'description' => request()->description ,
                'image' => $image 
            ]);
        }
        return back();
    }
    // public function edit(Categorie $categorie){
    //     return view('admin.categorie.edit',['categorie'=>$categorie]);
    // }
    public function update(){
        $categorieId = request()->id;
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        $name = request()->name ;
        $description = request()->description ;
        $image = request()->image;

        $toUpdateCategorie = Categorie :: find($categorieId);
        
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            $path = request()->file('image')->store('images/categories', 'public');
            $thumbnail = basename($path);

            $path = 'images/categories/' . $toUpdateCategorie->thumbnail;

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $toUpdateCategorie->update([
                'name' => $name,
                'description' => $description,
                'image' =>$thumbnail
            ]); 
            return back();
        }

        $toUpdateCategorie->update([
            'name' => $name,
            'description' => $description
        ]); 

        return back();
    }
    public function destroy($categorieId){
        $toDeleteCategorie = Categorie :: find($categorieId);
        $path = 'images/categories/' . $toDeleteCategorie->thumbnail;

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $toDeleteCategorie->delete();
        return to_route('categories.index');
    }
}
