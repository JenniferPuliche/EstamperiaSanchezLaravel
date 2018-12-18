<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function search($busqueda){
      $resultados = \App\Product::where('name','LIKE','%'.$busqueda.'%')
      ->get();
      return json_encode($resultados);
    }

    public function show(){
      return view('buscador');
    }
}