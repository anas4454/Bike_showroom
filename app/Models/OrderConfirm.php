<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConfirm extends Model
{
    /** @use HasFactory<\Database\Factories\OrderConfirmFactory> */
    use HasFactory;

    protected $fillable =[
        'oderid',
        'productId',
        'total_price',
        'name',
        'email',
        'phone',
        'city',
        'address',
        'payment_method',
        'payment_status',
        'order_status',
    ];

    public function product(){
        return $this->belongsTo(Product::class , 'productId');
    }


}
