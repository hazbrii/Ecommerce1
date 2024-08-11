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
    public function show(Categorie $categorie){
        $categorie = Categorie::find($categorie->id);
        //products already exists in $categorie variable acces it through( $categorie->products)
        return view('admin.categorie.show',['categorie' => $categorie]);
    }

    
    public function create(){
        return view('admin.categorie.create');
    }
    public function store(){
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if (request()->hasFile('thumbnail') && request()->file('thumbnail')->isValid()) {
            $path = request()->file('thumbnail')->store('images/categories', 'public');
            $thumbnail = basename($path);
            
            Categorie::create([
                'name' =>request()->name ,
                'description' => request()->description ,
                'thumbnail' => $thumbnail 
            ]);
            return to_route('categories.index');
        }
        return back();
    }
    public function edit(Categorie $categorie){
        return view('admin.categorie.edit',['categorie'=>$categorie]);
    }
    public function update($categorieId){
        request()->validate([
            'name' => ['required', 'max:100'],
            'description' =>['required', 'max:1000',] ,
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        $name = request()->name ;
        $description = request()->description ;
        $thumbnail = request()->thumbnail;

        $toUpdateCategorie = Categorie :: find($categorieId);
        
        if (request()->hasFile('thumbnail') && request()->file('thumbnail')->isValid()) {
            $path = request()->file('thumbnail')->store('images/categories', 'public');
            $thumbnail = basename($path);

            $path = 'images/categories/' . $toUpdateCategorie->thumbnail;

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $toUpdateCategorie->update([
                'name' => $name,
                'description' => $description,
                'thumbnail' =>$thumbnail
            ]); 
            return to_route('categories.index');
        }

        $toUpdateCategorie->update([
            'name' => $name,
            'description' => $description
        ]); 

        return to_route('categories.index');
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
