<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('backend.orders.index',compact('orders'));
    }

    public function details(Order $order){
        $subtotal = $this->orderTotal($order->id);
        $order_items = OrderItem::where('order_id',$order->id)->get();
        return view('backend.orders.order-details',compact('order','order_items','subtotal'));
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
            $bg_label = 'bg-label-info';
        }
        return $bg_label;
    }
    public  static function paymentBadge($order_status){
        $bg_label = '';
        if($order_status == "paid"){
            $bg_label = 'bg-label-success';
        }elseif($order_status == "pending"){
            $bg_label = 'bg-label-warning';
        }
        return $bg_label;
    }

    public function orderTotal($order_id){
        //retrieve order items
        $amount = 0;
        $order_items = OrderItem::where('order_id',$order_id)->get();
        foreach($order_items as $item){
            $amount += $item->quantity * $item->price;
        }
        return $amount;
    }
}
