<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Products_cart;
use App\Product;
use App\Cart;

class ProductCartController extends Controller
{
    public function store(Request $request){
 
        $productCart=new Products_cart();
        $productCart->id_cart=1;
        $productCart->id_product=$request->get('id_product');
        $productCart->quantity=$request->get('quantity');
        
        //obtener el total segun la cantidad
        $quantity=$request->get('quantity');
        $prod=Product::find($request->get('id_product'));
        $productCart->total= $quantity*$prod->pricing ;  
        $productCart->save();        

        
        return response()->json($productCart);

    }

    
}
