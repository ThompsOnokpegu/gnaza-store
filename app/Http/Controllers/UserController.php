<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function productDetails(Product $product){
        return view('frontend.product-details'); 
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
        return view('frontend.shop');
    }
    
}
