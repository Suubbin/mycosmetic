<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
    'user_id',
    'province_code',
    'district_code',
    'ward_code',
    'total_price',
    'order_code', 
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_code', 'code');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_code', 'code');
    }
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
