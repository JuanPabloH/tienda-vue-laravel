<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

        $products=Product::all();

        return response()->json($products);
    }

   public function store(Request $request){
 
        $product=new Product();
        $product->photo=$request->get('photo');
        $product->name=$request->get('name');
        $product->description=$request->get('description');
        $product->pricing=$request->get('pricing');

        $product->save();

        return response()->json($product);
    } 
}
