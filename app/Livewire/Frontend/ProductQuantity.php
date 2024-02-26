<?php

namespace App\Livewire\Frontend;

use App\Services\CartService;
use Livewire\Component;

class ProductQuantity extends Component
{
    public $quantity = 1;

    public $product;

    protected $cart;

    public function mount($product){
        $this->product = $product;
    }
    public function render()
    {
        $product = $this->product;
        return view('livewire.frontend.product-quantity',compact('product'));
    }

    public function increment(){
        $this->quantity++;
    }

    public function decrement(){
        if($this->quantity>0){
            $this->quantity --;
        }
    }

    public function addToCart(){

        $this->cart = new CartService();
        //$this->cart->clear();
        // array format
        if($this->quantity > 0){
            $this->cart->add(array(
                'id' => $this->product->id, // inique row ID
                'name' => $this->product->name,
                'price' => $this->product->regular_price,
                'quantity' => $this->quantity,
                'attributes' => array(),
                'associatedModel' => $this->product,
            ));
            session()->flash('added',$this->product->name.' added to cart');
        }else{
            session()->flash('qty-required','Choose quantity');
        }
        
    }


    public function buyNow(){
        redirect()->route('checkout');
    }
}
