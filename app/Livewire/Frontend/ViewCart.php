<?php

namespace App\Livewire\Frontend;

use App\Services\CartService;
use CartHelper;
use Livewire\Component;

class ViewCart extends Component
{
    protected $cart;

    public function mount($cart){
        $this->cart = $cart;
    }
    public function render()
    {
        $cart = $this->cart;
        return view('livewire.frontend.view-cart',compact('cart'));
    }

    public function increaseQuantity($product){
        $this->cart = new CartService();
        //dd('fired');
        $this->cart->update($product, array(
            'quantity' => 1, // increase qty by 1
        ));
    }

    public function decreaseQuantity($product){
        
        $this->cart = new CartService();
        $cartItem = $this->cart->get($product);
        $this->cart->update($product, array(
            'quantity' => -1, // reduce qty by 1
        ));
        // if($cartItem->quantity > 1){

            
        // }
    }

    public function removeItem($product){
        $this->cart = new CartService();
        $cartItem = $this->cart->get($product);

        if($cartItem){
            $this->cart->remove($product);
        }
    }

}
