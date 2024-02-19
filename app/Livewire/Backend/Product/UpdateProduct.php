<?php

namespace App\Livewire\Backend\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use App\Services\CloudinaryUpload;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    use WithFileUploads;
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

        //Upload product Image File to Cloudinary
        if(gettype($this->form->product_image) != 'string'){
            //user changed the product image
            $uploadedFileUrl = CloudinaryUpload::uploadImage("products", $this->form->product_image);
            $filename = $uploadedFileUrl;
            $this->form->product_image = $filename;
        }

        $saved = $product->update($this->form->all());

        if($saved){
            //TODO: Delete existing product image
            return $this->redirect('/admin/products');
        }
    }
}
