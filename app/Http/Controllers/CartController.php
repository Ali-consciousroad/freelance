<?php

namespace App\Http\Controllers;
//import the Product class
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        dd($product);
        // add to cart action
        //$product = Product::find($productId);
    }
}
