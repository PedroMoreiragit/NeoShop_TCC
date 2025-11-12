<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $productCount = Product::sum('stock');
        $totalPriceInStock = Product::selectRaw('SUM(price * COALESCE(stock, 0)) as total')
            ->value('total');
        $totalPriceInStock = (float) $totalPriceInStock;
        $usersCount = User::count();
        return view('dashboard.home', compact('productCount', 'usersCount', 'totalPriceInStock'));
    }


    //crud
    public function orders()
    {

    }

    //crud
    public function reports()
    {


    }
}
