<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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
        $products = Product::all(); // traigo todos los productos
        $categories = Category::all(); // traigo las categorías (M-V-JUV)

        return view ('pages.producto', compact(['product', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
        return view('auth.product');//->with('categories', $categories);
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
            $path = $request->file('image')->storePublicly('products');
        }
        // Creo el objeto proudcto y lo guardo en la DB

        //@TODO
        $product = Product::create([
            'name' => $request->input('name'),
            'wholesale_price' => $request->input('price')??0,
            'retail_price' => $request->input('price')??0,
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

        return redirect('/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
