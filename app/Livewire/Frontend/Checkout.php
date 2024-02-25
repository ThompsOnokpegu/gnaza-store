<?php

namespace App\Livewire\Frontend;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Services\CartService;
use App\Services\Paystack;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Ramsey\Uuid\Uuid;

class Checkout extends Component
{
    protected $cart;
    public $door_step = 2700;
    public $pickup = 0;
    public $shippingCost = 0;
    #[Validate('required')]
    #[Validate('email')]
    public $billing_email;
    #[Validate('required')]
    #[Validate('min:3')]
    public $billing_name;
    #[Validate('required')]
    #[Validate('min:11')]
    public $billing_phone;
    #[Validate('required')]
    public $billing_address;
    #[Validate('required','zone')]
    public $billing_city;
    
    
    public function render()
    {
        $this->cart = new CartService();
        $cart = $this->cart;
        return view('livewire.frontend.checkout',compact('cart'))
        ->extends('frontend.layouts.checkout-partial');
    }

    public function calculateShipping($method){
        $this->cart = new CartService();
        if($method=='pickup'){
            $conditionName = 'Delivery';
            $this->cart->removeCartCondition($conditionName);

            $this->shippingCost = $this->pickup;
            $condition1 = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'Delivery',
                'type' => 'shipping',
                'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                'value' => '+0',
                'order' => 1
            ));

            $this->cart->condition($condition1);
        }
        else{
            $conditionName = 'Delivery';
            $this->cart->removeCartCondition($conditionName);

            $this->shippingCost = $this->door_step;
            $condition1 = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'Delivery',
                'type' => 'shipping',
                'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                'value' => '+'.$this->door_step,
                'order' => 1
            ));

            $this->cart->condition($condition1);
        }
    }

    public function placeOrder(){
      
        //validate billing details
        $this->validate();

        //create user
        $user = $this->createUser();

        //create the order
        $order = $this->createOrder('pending',$user);
        
        //get payment link
        $paystack = new Paystack();
        $payment_link = $paystack->getPaymentLink($user,$order);

        //clear cart
        $this->cart->clear();

        //process payment: redirect to Paystack Gateway
        try {
            return redirect()->away($payment_link['authorization_url']);
        } catch (Exception $e) {
            return session()->flash('message','Connection failed: try again later!');
        }
         
        //New order event is triggered in Webhook charge.success  
    }

    public function createUser(){
        $existing_user = User::where('email',$this->billing_email)->first();
        if(!$existing_user){

            $user = new User();
    
            $user->name = $this->billing_name;
            $user->email = $this->billing_email;
            $user->phone = $this->billing_phone;
            $user->address = $this->billing_address;
            $user->city = $this->billing_city;
            $user->password = Hash::make('password');
    
            $user->save();

            return $user;
        }

        return $existing_user;
    }

    private function createOrder($status,$user){
        //Create Cart instance
        $this->cart = new CartService();
        // Get UUID as a string
        $uuid = Uuid::uuid4()->toString(); 
        //create new order instance
        $order = new Order();
        //cart total
        $amount = str_replace(',','', $this->cart->getTotal());
        //get delivery fee that was applied to the cart
        $delivery = $this->cart->getCondition('Delivery');
        $shipping = $delivery->getValue();
           
        
        DB::beginTransaction();
            //set fields
            $order->reference = $uuid; 
            $order->user_id = $user->id; // Assuming a customer places the order
            $order->recipient_address = $this->billing_address;
            $order->recipient_city = $this->billing_city;
            $order->recipient_phone = $this->billing_phone;
            $order->recipient_name = $this->billing_name;
            $order->order_status = 'Awaiting Payment';
            $order->payment_status = $status;
            $order->payment_method = "Paystack";
            $order->discount = 0;
            $order->shipping = $shipping;
            $order->total = $amount;
            
            //save order
            $order->save();
            
            //get cart items
            $cartItems = $this->cart->getContent();
            
            //create new order items
            foreach($cartItems as $item){
                OrderItem::create([
                    'order_id' => $order->id,
                    'name' => $item->name,
                    'price' => $item->price,
                    'quantity' =>$item->quantity,
                ]);
            }
        DB::commit();
        
        return $order;
    }

}
