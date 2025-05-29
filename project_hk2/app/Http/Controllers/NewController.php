<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class NewController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->take(12)->get();
        return view('products.new', compact('products'));
    }
}
