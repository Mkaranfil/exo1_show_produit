<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index(){

        $produit =Produit::all();
       

         return view('welcome',compact('produit'));

    }
    
    public function show($id){
        $show= Produit::find($id);
        return view('show', compact('show'));
    }
}
