<?php

namespace App\Livewire\Backend\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use illuminate\Support\Str;

class CreateProduct extends Component
{
    public ProductForm $form;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.backend.product.create-product')
        ->extends('backend.layouts.main')
        ->with(['categories'=>$categories]);
    }

    public function save()
    {
        $this->validate();
        $this->form->slug = Str::slug($this->form->name);

        Product::create(
            $this->form->all()
        );

        $this->reset();
         
        return $this->redirect('/admin/products');
    }
}
