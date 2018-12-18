<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name', 180);
        $table->timestamps();
      });

      \DB::table('categories')->insert([
        [ 'name'=>'Remeras'],
        [ 'name'=>'Gorras'],
        [ 'name'=>'Camperas'],
      ]);

      Schema::create('products', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->string('name', 180);
        $table->string('category', 255)->nullable();
        $table->integer('wholesale_price')->nullable();
        $table->integer('retail_price')->nullable();
        $table->string('image', 500)->nullable();
        $table->string('color', 255)->nullable();
        $table->rememberToken();
        $table->timestamps();
      });

      Schema::create('category_product', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->unsignedInteger('category_id');
        $table->unsignedInteger('product_id');

        $table->foreign('category_id')->references('id')->on('categories');
        $table->foreign('product_id')->references('id')->on('products');
      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
     }
 }
