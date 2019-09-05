<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_cart extends Model
{
    public function Cart(){
    	return $this->belongsTo('App\Cart');
    }
    public function Product(){
    	return $this->belongsTo('App\Product');
    }
}
