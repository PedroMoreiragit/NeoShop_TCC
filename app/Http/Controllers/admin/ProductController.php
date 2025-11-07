<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class ProductController extends Controller
{

    public function showCreateForm()
    {
        $categories = Category::all();
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

        $productImagePath = $request->file("image_path")->store("/products");

        $product = Product::create([
            ... $product,
            'image_path' => $productImagePath
        ]);

        return redirect('products');
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('dashboard.products', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products');
    }


}
