<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Bảng liên kết với model này
    protected $table = 'transactions';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = ['product_id', 'type', 'quantity', 'transaction_date'];

    // Quan hệ với bảng products (nếu có)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}