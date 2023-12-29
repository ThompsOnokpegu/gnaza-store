<?php

namespace App\Livewire;

use App\Models\ProductAttribute;
use Livewire\Component;

class CreateAttribute extends Component
{
    public $count = 0;
    public $attribute_values = [];
    public $name;
    public $slug;

    public function render()
    {
        return view('livewire.product.create-attribute')
        ->extends('backend.layouts.main');
    }

    public function add(){
        $this->count ++;
    }

    public function saveVariation(){  

        $values = json_encode($this->attribute_values);

        $attribute = ProductAttribute::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'values' => $values,
        ]);

    }
}
