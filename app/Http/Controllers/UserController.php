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
        $products = Product::all();
        return view('frontend.index-fix',compact('products'));
    }

    public function productDetails(Product $product){
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

    public function archive($category){
        $archive = []; //default category products
        $category_name = '';//default category
        $category = Category::where('slug',$category)->first();
    
        if($category){
            $archive = Product::where('category_id',$category->id)->get();
            $category_name = $category->name;
        }
  
        return view('frontend.archive',compact('archive','category_name'));
    }

    public  static function statusBadge($order_status){
        $bg_label = '';
        if($order_status == "Processing"){
            $bg_label = 'bg-label-primary';
        }elseif($order_status == "Delivered")
            $bg_label = 'bg-label-success';
        elseif($order_status == "Canceled"){
            $bg_label = 'bg-label-danger';
        }else{
            $bg_label = 'text-gz-warning';
        }
        return $bg_label;
    }
    
}
