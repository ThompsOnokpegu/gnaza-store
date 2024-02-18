<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $cart;

    public function index(){
        return view('frontend.index');
    }

    public function productDetails($category,Product $product){
        $related = $product->category->products;
        return view('frontend.product-details',compact('product','related'));        
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function checkout(){
        return view('frontend.checkout');
    }

    public function thankYou(){
        return view('frontend.thank-you');
    }

    public function shop(){
        $products = Product::all();
        return view('frontend.shop',compact('products'));
    }
    
}
