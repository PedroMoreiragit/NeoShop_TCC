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
        $productCount = Product::count();
        $totalPriceInStock = Product::sum('price');
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
