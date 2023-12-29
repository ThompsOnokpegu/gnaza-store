<?php

namespace App\Livewire;

use Livewire\Component;

class CreateProduct extends Component
{
    public $name;
    public $description;
    public $price;
    public $sizes = ['S', 'M', 'L'];
    public $colors = ['Black', 'Blue'];
    public $quantities = [];

    public function render()
    {
        return view('livewire.product.create-product')
        ->extends('backend.layouts.main');
    }

    public function createProduct()
    {
        // Process form data and send it to a controller method
        $formData = [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'sizes' => $this->sizes,
            'colors' => $this->colors,
            'quantities' => $this->quantities,
        ];

        // Call a controller method to handle product creation
        $this->dispatchBrowserEvent('product-created', $formData);
    }
}
