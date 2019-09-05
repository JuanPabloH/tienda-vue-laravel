<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products_cart;
use App\Product;

class ProductCartController extends Controller
{
    public function store(Request $request){
 
        $productCart=new Products_cart();
        $productCart->id_cart=1;
        $productCart->id_product=$request->get('id_product');
        $productCart->quantity=$request->get('quantity');      
        $productCart->save();
        return response()->json($productCart);
    }
}
