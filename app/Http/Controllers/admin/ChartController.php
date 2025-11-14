<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function stock()
    {
        $monthsToShow = 6;

        $months = collect();
        for ($i = $monthsToShow - 1; $i >= 0; $i--) {
            $dt = Carbon::now()->subMonths($i);
            $months->push([
                'month' => $dt->month,
                'year' => $dt->year,
                'label' => $dt->locale('pt_BR')->translatedFormat('M')
            ]);
        }

        $startDate = Carbon::now()->subMonths($monthsToShow - 1)->startOfMonth();

        $rows = Product::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(stock) as total_stock')
        )
            ->where('created_at', '>=', $startDate)
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        $map = [];
        foreach ($rows as $r) {
            $key = $r->year . '-' . str_pad($r->month, 2, '0', STR_PAD_LEFT);
            $map[$key] = (int) $r->total_stock;
        }

        $labels = [];
        $data = [];

        foreach ($months as $m) {
            $key = $m['year'] . '-' . str_pad($m['month'], 2, '0', STR_PAD_LEFT);
            $labels[] = $m['label'];
            $data[] = $map[$key] ?? 0;
        }

        return response()->json([
            'labels' => $labels,
            'data' => $data
        ]);
    }

    public function getCategoryData()
    {
        $categories = Category::withCount('products')->get();

        $labels = $categories->pluck('name');
        $data = $categories->pluck('products_count');
        return response()->json([
            'labels' => $labels,
            'data' => $data
        ]);
    }




}
