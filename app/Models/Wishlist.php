<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Wishlist extends Model
{
    use HasFactory;

    public $table = 'wishlists';

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'price',
        'created_at',
        'updated_at'
    ];


    public function products() 
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
