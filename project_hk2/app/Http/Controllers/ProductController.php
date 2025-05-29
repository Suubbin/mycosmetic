<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm và phân trang
        $products = Product::paginate(20); // mỗi trang 20 sản phẩm
        return view('products.product', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }
}
