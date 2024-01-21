<?php

namespace App\Livewire\Backend\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class UpdateProduct extends Component
{
    public ProductForm $form;
    public $product_id;

    public function render()
    { 
        $categories = Category::all();
        return view('livewire.backend.product.update-product')
        ->extends('backend.layouts.main')
        ->with(['categories'=>$categories]);
    }

    public function mount(Product $product){
        $this->product_id = $product->id;
        $this->form->setProduct($product);
    }

    public function save(){
        
        $product = Product::find($this->product_id);
        $this->form->slug = Str::slug($this->form->name);

        $saved = $product->update($this->form->all());

        if($saved){
            return $this->redirect('/admin/products');
        }
    }
}
