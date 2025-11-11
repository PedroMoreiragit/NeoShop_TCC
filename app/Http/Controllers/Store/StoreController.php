<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{

    public function store()
    {
        $products = Product::all();
        return view('e-commerce.home', compact('products'));
    }

    public function viewProduct($slug)
    {

        $name = str_replace('-', ' ', $slug);

        $product = Product::whereRaw('LOWER(name) = ?', [strtolower($name)])->firstOrFail();
        $products = Product::all();
        $images = explode(',', $product->image_path);
        if (is_string($product->technical_info)) {
            $decoded = json_decode($product->technical_info, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $product->technical_info = $decoded;
            } else {
                $product->technical_info = [];
            }
        } elseif (!is_array($product->technical_info)) {
            $product->technical_info = [];
        }

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('e-commerce.product', compact('product', 'images', 'products', 'relatedProducts'));
    }
}
