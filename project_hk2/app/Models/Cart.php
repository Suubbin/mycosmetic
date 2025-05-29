<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    // Liên kết với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Liên kết với bảng products
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
