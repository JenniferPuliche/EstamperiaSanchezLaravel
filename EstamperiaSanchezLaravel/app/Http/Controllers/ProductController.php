<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
#@TODO agregar validación al form product.create
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Clase alta baja */
        $products = Product::paginate(4);//paginate(5); // traigo todos los productos
        //$categories = Category::all(); // traigo las categorías (M-V-JUV)
        //products.index
        //compact(['products', 'categories']));
        return view ('product.remeras', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
        return view('product.create');//->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image'=> 'nullable|image',
            'wholesale_price' =>'nullable|integer|min:0',
            'retail_price' =>'nullable|integer|min:0'
        /*
        $table->string('name', 180);
        $table->integer('wholesale_price')->nullable();
        $table->integer('retail_price')->nullable();
        $table->string('image', 500);
        $table->string('color', 255);
        */
        ]);

        //dd($request->all());
        //consulto si hay imagen y la guardo
        if($request->file('image')){
            $nombreArchivo= $request->input('name').'.'.$request->file('image')->extension();
            $path = $request->file('image')->storePubliclyAs('public/products', $nombreArchivo);
        }
        // Creo el objeto proudcto y lo guardo en la DB

        //@TODO
        $product = Product::create([
            'name' => $request->input('name'),
            'wholesale_price' => $request->input('wholesale_price')??0,
            'retail_price' => $request->input('retail_price')??0,
            'image' => $path??null,
        ]);
        // Relaciono el ID con la categoria ID
        //OPCIÓN ATTACH (de uno a uno)
        /*foreach ($request->input('categories') as $category) {
            $product->categories()->attach($category);
        } */

        //OPCION ARRAY (de a muchos, sincroniza de a muchos)
        # @TODO

        //$product->save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.example');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //Busco el producto id
      $product = Product::find($id);

      //dd($product);
      //paso los datos al formulario
      return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
      //dd($id);
      //Busco la información vieja del producto
      $product = Product::find($id);
      $path = $product->image;
      //Valido nuevos datos
      $this->validate($request, [
          'name' => 'required',
          'image'=> 'nullable|image',
          'wholesale_price' =>'nullable|integer|min:0',
          'retail_price' =>'nullable|integer|min:0'
      ]);
      //Redefino el path nuevo de imagen
      if($request->file('image')){
          $nombreArchivo= $request->input('name').'.'.$request->file('image')->extension();
          //Borramos la imagen vieja
          \Storage::delete($path);
          //Guardamos la nueva iamgen
          $path = $request->file('image')->storePubliclyAs('public/products', $nombreArchivo);
      }
      //Actualizo la información
      $product->update([
          'name' => $request->input('name'),
          'wholesale_price' => $request->input('wholesale_price')??0,
          'retail_price' => $request->input('retail_price')??0,
          'image' => $path??null,
      ]);

      // $product->name = $request->input('name')??0;
      // $product->image = $request->input('name')??0;
      // $product->wholesale_price = $request->input('whole_price')??0;
      // $product->retail_price = $request->input('retail_price')??0;
      // $product->image = $path;
      // $product->save();
      return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('/product');
    }
}
