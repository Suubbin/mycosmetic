<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SaleController extends Controller
{
    public function sale()
    {
        $products = Product::latest()->paginate(20);
        return view('products.sale', compact('products'));
    }
}
