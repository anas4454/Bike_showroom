<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    /** @use HasFactory<\Database\Factories\ProductImgFactory> */
    use HasFactory;

    public function product(){
      return $this->belongsTo(Product::class);

    }

}
