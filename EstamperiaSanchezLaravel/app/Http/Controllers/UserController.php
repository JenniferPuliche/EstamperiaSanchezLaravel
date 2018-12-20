<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
	//private $user = \Auth::user();
	public function index()
	{
		$user = \Auth::user();
		return view('user.profile', compact('user'));
	}

	public function edit()
	{
	  //Busco el producto id
		$user = \Auth::user();
	 	return view('user.edit', compact('user'));
	}

    public function update(Request $request)
    {
		//dd($id);
		//Busco la información vieja del producto
		$user = \Auth::user();
		$path = $user->avatar;
		//dd($request);
		//Valido nuevos datos
		$this->validate($request, [
		  'name' => 'required|string|max:255',
		  'dni' =>'nullable|numeric|min:1000000|max:99999999',
		  'tel' =>'nullable|regex:/(01)[0-9]{9}/',
		  'sexo' =>'nullable|string|max:20',
		  'avatar'=> 'nullable|image',
		]);
      //Redefino el path nuevo de imagen
      if($request->file('avatar')){
          $nombreArchivo= $request->input('name').'.'.$request->file('avatar')->extension();
          //Borramos la imagen vieja
          \Storage::delete($path);
          //Guardamos la nueva iamgen
          $path = $request->file('avatar')->storePubliclyAs('public/user/avatar', $nombreArchivo);
      }
      //dd($request->input('dni'));
      //Actualizo la información
      $user->update([
          'name' => $request->input('name'),
          'dni' => $request->input('dni'),
          'tel' => $request->input('tel'),
          'sexo' => $request->input('sexo'),
          'avatar' => $path??null,
      ]);
      //dd($user);
      // $product->name = $request->input('name')??0;
      // $product->image = $request->input('name')??0;
      // $product->wholesale_price = $request->input('whole_price')??0;
      // $product->retail_price = $request->input('retail_price')??0;
      // $product->image = $path;
      // $product->save();
      return redirect('/user');
    }

}
