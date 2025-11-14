<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $totalPriceInStock = Product::selectRaw('SUM(price * COALESCE(stock, 0)) as total')
            ->value('total');

        $totalPriceInStock = (float) $totalPriceInStock;
        $recentUsers = User::orderBy('created_at', 'desc')->take(6)->get();

        $totalCategories = Category::count();
        $productCount = Product::sum('stock');
        $usersCount = User::count();

        return view('dashboard.home', compact(
            'productCount',
            'usersCount',
            'totalPriceInStock',
            'totalCategories', 'recentUsers'
        ));
    }
}
