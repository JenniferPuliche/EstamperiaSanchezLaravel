<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
	public function category(){
		return $this->belongsTo(Category::class);
		//@TODO chequear si guarda relación
	}
    //
}
