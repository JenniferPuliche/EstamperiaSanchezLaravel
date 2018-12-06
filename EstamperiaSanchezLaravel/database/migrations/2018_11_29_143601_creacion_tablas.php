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
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('name', 180);
          $table->integer('wholesale_price')->nullable();
          $table->integer('retail_price')->nullable();
          $table->string('image', 500);
          $table->string('color', 255);
          $table->rememberToken();
          $table->timestamps();
      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::dropIfExists('products');
     }
 }
