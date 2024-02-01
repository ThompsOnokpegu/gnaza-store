<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate('required',message:'Product name is required')]
    #[Validate('min:5')]
    public $name;
    public $slug;
    #[Validate('required',message:'Product category is required')]
    public $category_id;

    #[Validate('required',message:'Describe the product')]
    public $description;

    #[Validate('required',message:'Regular price is required')]
    public $regular_price;
    public $sales_price;

    #[Validate('required',message:'Provide a unique SKU')]
    public $sku;
    #[Validate('required',message:'Stock quantity is required')]
    public $stock_quantity;
    #[Validate('required',message:'Low stock threshold is required')]
    public $low_stock_threshold;
    public $tags;
    #[Validate('required',message:'Product image is required')]
    //#[Validate('image|max:1024')] // 1MB Max
    public $product_image;
    public $image_gallery;
    public $sales_start_date;
    public $sales_end_date;
    public $discount_type;
    public $discount_amount;
    public $meta_title;
    public $meta_description;
    public $keywords;
    public $status;

    public function setProduct(Product $product){
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->category_id = $product->category_id; 
        $this->description = $product->description; 
        $this->regular_price = $product->regular_price; 
        $this->sales_price = $product->sales_price; 
        $this->sku = $product->sku; 
        $this->stock_quantity = $product->stock_quantity; 
        $this->tags = $product->tags; 
        $this->low_stock_threshold = $product->low_stock_threshold; 
        $this->product_image = $product->product_image; 
        $this->image_gallery = $product->image_gallery; 
        $this->sales_start_date = $product->sales_start_date; 
        $this->sales_end_date = $product->sales_end_date; 
        $this->discount_type = $product->discount_type; 
        $this->discount_amount = $product->discount_amount; 
        $this->meta_title = $product->meta_title; 
        $this->meta_description = $product->meta_description; 
        $this->keywords = $product->keywords; 
        $this->status  = $product->status ; 
    }

}
