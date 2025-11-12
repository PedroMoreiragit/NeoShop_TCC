<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    /**
     * Summary of showProduct
     * @return \Illuminate\Contracts\View\View
     */
    public function showProduct()
    {
        $products = Product::with('category')->get();
        return view('dashboard.products', compact('products'));
    }

    /**
     * Summary of showCreateForm
     * @return \Illuminate\Contracts\View\View
     */
    public function showCreateForm()
    {
        $categories = Category::all();
        return view('dashboard.createProduct', compact('categories'));
    }

    public function showUpdateProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.updateProduct', compact('categories', 'product'));
    }



    /**
     * Summary of createProduct
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createProduct(Request $request)
    {

        $product = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:355',
            'long_description' => 'nullable|string|max:455',
            'technical_info' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'image_path' => 'nullable|file|required',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $productImagePath = $request->file("image_path")->store("/products");

        $product = Product::create([
            ...$product,
            'image_path' => $productImagePath
        ]);

        return redirect('products');
    }

    /**
     * Summary of updateProduct
     * @param \Illuminate\Http\Request $request
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProduct(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:355',
            'long_description' => 'nullable|string|max:455',
            'technical_info' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'image_path' => 'nullable|file',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('products');
        } else {
            $validated['image_path'] = $product->image_path;
        }

        $product->update($validated);

        return redirect('products')->with('success', 'Produto atualizado com sucesso!');
    }


    /**
     * Summary of deleteProduct
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products');
    }



}
