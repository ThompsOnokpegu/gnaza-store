<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Attribute;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'regular_price',
        'sales_price',
        'sku',
        'tags',
        'stock_quantity',
        'low_stock_threshold',
        'product_image',
        'image_gallery',
        'sales_start_date',
        'sales_end_date',
        'discount_type',
        'discount_amount',
        'meta_title',
        'meta_description',
        'keywords',
        'status',
    ];


    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }  
}
