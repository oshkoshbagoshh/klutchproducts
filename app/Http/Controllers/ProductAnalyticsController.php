<?php
// app/Http/Controllers/ProductAnalyticsController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAnalyticsController extends Controller
{
    public function index()
    {
        $categoryAnalysis = Category::withCount('products')
            ->withSum('products', 'total_revenue')
            ->withAvg('products', 'profit_margin')
            ->get();

        $topProducts = Product::orderBy('total_revenue', 'desc')
            ->with('category')
            ->take(10)
            ->get();

        $pricingTrends = Product::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('AVG(price) as avg_price'),
            DB::raw('COUNT(*) as product_count')
        )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $salesPerformance = Product::select(
            'category_id',
            DB::raw('SUM(total_revenue) as total_revenue'),
            DB::raw('AVG(rating) as avg_rating'),
            DB::raw('COUNT(*) as product_count')
        )
            ->groupBy('category_id')
            ->with('category')
            ->get();

        return Inertia::render('ProductAnalytics/Index', [
            'categoryAnalysis' => $categoryAnalysis,
            'topProducts' => $topProducts,
            'pricingTrends' => $pricingTrends,
            'salesPerformance' => $salesPerformance
        ]);
    }
}
