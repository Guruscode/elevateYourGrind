<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Calculate statistics
        $totalSales = Order::sum('total_price');
        $totalOrders = Order::count();
        $productsInStock = Product::sum('stock');

        // Prepare sales data for the chart (example: monthly sales)
        $salesData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June'], // Replace with dynamic labels
            'data' => [5000, 7000, 8000, 6000, 9000, 10000], // Replace with dynamic data
        ];

        return view('admin.dashboard', compact('totalSales', 'totalOrders', 'productsInStock', 'salesData'));
    }
}
