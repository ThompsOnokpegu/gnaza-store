<?php

namespace App\Livewire;

use App\Models\AttributeOption;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\DB;
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

    public function saveAttribute(){
        DB::beginTransaction();
        //create the attribute 
        $attribute = ProductAttribute::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);
        //create the attribute options
        
        foreach($this->attribute_values as $value){
            $attributeOption = new AttributeOption();
            $attributeOption->product_attribute_id = $attribute->id;
            $attributeOption->value = $value;
            $attributeOption->save();
        }
        DB::commit();
        $this->reset();
        return session()->flash('saved','Saved successfully!');

    }

}
