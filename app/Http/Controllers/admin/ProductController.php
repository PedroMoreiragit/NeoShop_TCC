<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showCreateForm()
    {
        $categories = \App\Models\Category::all();
        return view('dashboard.createProduct', compact('categories'));
    }

    public function createProduct(Request $request)
    {

        $product = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:355',
            'long_description' => 'nullable|string|max:455',
            'technical_info' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'image_path' => 'nullable|file',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $productImagePath = $request->file("image_path")->store("products");

        $product = Product::create([
            ... $product,
            'image_path' => $productImagePath
        ]);

        return redirect('products');
    }

    public function showProduct()
    {
        return view('dashboard.products');
    }


}
