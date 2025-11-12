<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Summary of showCategories
     * @return \Illuminate\Contracts\View\View
     */
    public function showCategories()
    {
        $categories = Category::all();
        return view('dashboard.categories', compact('categories'));
    }


    /**
     * Summary of showCreateCategory
     * @return \Illuminate\Contracts\View\View
     */
    public function showCreateCategory()
    {
        return view('dashboard.createCategory');
    }

    /**
     * Summary of createCategory
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function createCategory(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.unique' => 'Essa categoria já existe!',
            'name.required' => 'O nome da categoria é obrigatório.',
        ]);

        if ($validated) {
            Category::create([
                'name.unique' => $validated['name'],
                'slug' => Str::slug($validated['name'])
            ]);
        }

        return view('dashboard.categories');
    }

    /**
     * Summary of showUpdateCategory
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function showUpdateCategory($id)
    {

        $category = Category::findOrFail($id);

        return view('dashboard.updateCategory', compact('category'));
    }

    /**
     * Summary of updateCategory
     * @param \Illuminate\Http\Request $request
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function updateCategory(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.unique' => 'Essa categoria já existe!',
            'name.required' => 'O nome da categoria é obrigatório.',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

        $categories = Category::all();
        return view('dashboard.categories', compact('categories'));
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        $categories = Category::all();
        return view('dashboard.categories', compact('categories'));
    }
}
