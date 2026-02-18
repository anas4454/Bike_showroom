<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class , "category_id");
    }

    public function images(){
        return $this->hasMany(ProductImg::class , "product_id");
    }

    public function orderConfirms(){
        return $this->hasMany(OrderConfirm::class);
    }

    protected $guarded = [];

}
