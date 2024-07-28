<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order_item()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function cart_item()
    {
        return $this->hasMany(CartItem::class, 'product_id');
    }
}
