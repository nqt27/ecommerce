<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }
}
