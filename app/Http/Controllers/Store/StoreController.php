<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function store()
    {
        $products = Product::all();
        return view('e-commerce.home', compact('products'));
    }
}
