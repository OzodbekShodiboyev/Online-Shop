<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Order;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $productResults = Product::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('description', 'like', '%' . $keyword . '%')
            ->get();

        $userResults = User::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->get();

        $categoryResults = Category::where('name', 'like', '%' . $keyword . '%')
            ->get();

        $brandResults = Brand::where('name', 'like', '%' . $keyword . '%')
            ->get();

        $orderResults = Order::where('order_number', 'like', '%' . $keyword . '%')
            ->get();

        $colorResults = Color::where('name', 'like', '%' . $keyword . '%')
            ->get();

        $results = [
            'products' => $productResults,
            'users' => $userResults,
            'categories' => $categoryResults,
            'brands' => $brandResults,
            'orders' => $orderResults,
            'colors' => $colorResults,
        ];

        return view('admin.search_results', compact('results'));
    }
}
