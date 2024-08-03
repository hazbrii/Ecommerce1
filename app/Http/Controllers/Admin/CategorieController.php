<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        return view('admin.categorie.show');
    }
    public function destroy($categorieId){
        $toDeleteCategorie = Categorie :: find($categorieId);
        $toDeleteCategorie->delete();
        return back(); 
    }
}
