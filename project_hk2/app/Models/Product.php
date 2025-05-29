<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Bảng liên kết với model này
    protected $table = 'products';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = ['name', 'price', 'description', 'image'];

    // Quan hệ với bảng transactions (nếu có)
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
