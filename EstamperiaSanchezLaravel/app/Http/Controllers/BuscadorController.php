<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class BuscadorController extends Controller
{
    /*public function search($busqueda){
      $resultados = \App\Product::where('name','LIKE','%'.$busqueda.'%')
      ->get();
      dd($resultados);
      return json_encode($resultados);
    }

    public function show(){
      return view('pages.buscador');
    }
*/
    public function search(Request $request)
    {
    	$products = \App\Product::where('name','LIKE','%'.$request->input('search').'%')->paginate(4);
    	$categories = Category::all();
    	return view ('product.index', compact(['products', 'categories']));
    }

}