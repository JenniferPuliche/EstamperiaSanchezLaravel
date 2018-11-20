<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
  public function loguearUsuario(){
    return  view('pages.loguearUsuario');
  }
  public function registrarUsuario(){
    return view('pages.registrarUsuario');
  }
  public function actualizarDatosUsuario(){
    return view();
  }
}
