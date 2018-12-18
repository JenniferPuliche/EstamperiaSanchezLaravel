<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = ['update_at', 'created_at','remember_token'];
	
	public function categories(){
		return $this->belongsToMany(Category::class);
		//@TODO chequear si guarda relación
	}
    //
}
