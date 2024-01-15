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
        'name',
        'slug',
        'description',
        'image',
        'type',
    ];
    // public function attributes()
    // {
    //     return $this->belongsToMany(Attribute::class)
    //         ->withPivot('attribute_value_id', 'quantity');
    // }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }  
}
