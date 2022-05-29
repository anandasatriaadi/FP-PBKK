<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = "products";

    protected $guarded = ['id'];

    public function order_product(){
        return $this->hasMany(OrderProduct::class);
    }
    public function cart_product(){
        return $this->hasMany(CartProduct::class);
    }
}
