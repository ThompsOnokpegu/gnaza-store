<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class ProductQuantity extends Component
{
    public $quantity = 0;

    public function render()
    {
        return view('livewire.frontend.product-quantity');
    }

    public function increment(){
        $this->quantity++;
    }

    public function decrement(){
        if($this->quantity>0){
            $this->quantity --;
        }
    }
}
