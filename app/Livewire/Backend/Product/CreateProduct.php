<?php

namespace App\Livewire\Backend\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use App\Service\CloudinaryUpload;
use Livewire\Component;
use illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

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

        // Upload product Image File to Cloudinary
        $uploadedFileUrl = CloudinaryUpload::uploadImage("products", $this->form->product_image);
        $filename = $uploadedFileUrl;
        $this->form->product_image = $filename;
        Product::create(
            $this->form->all()
        );

        $this->reset();
         
        return $this->redirect('/admin/products');
    }
}
