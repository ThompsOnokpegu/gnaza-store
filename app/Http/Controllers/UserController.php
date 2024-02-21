<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $mycart;

    public function index(){
        return view('frontend.index');
    }

    public function productDetails($category,Product $product){
        $related = $product->category->products;
        return view('frontend.product-details',compact('product','related'));        
    }

    public function cart(){
        $this->mycart = new CartService();
        $cart = $this->mycart;
        return view('frontend.cart',compact('cart'));
    }

    public function checkout(){
        $this->mycart = new CartService();
        $cart = $this->mycart;
        return view('frontend.checkout',compact('cart'));
    }

    public function thankYou($reference){
        $order = Order::where('reference',$reference)->first();
        return view('frontend.thank-you',compact('order'));
    }

    public function shop(){
        $products = Product::all();
        return view('frontend.shop',compact('products'));
    }
    
}
