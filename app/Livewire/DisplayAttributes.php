<?php

namespace App\Livewire;

use App\Models\ProductAttribute;
use Livewire\Component;

class DisplayAttributes extends Component
{
    public function render()
    {
        $attributes = ProductAttribute::all();
        return view('livewire.product.display-attributes',compact('attributes'));
    }
}
