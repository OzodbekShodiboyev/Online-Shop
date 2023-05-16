<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function header()
    {
        $categories = Category::get();
        return view('layouts.header', compact('categories'));
    }
    public function index()
    {
        $slider = Slider::where('status', '0')->get();
        $categories = Category::get();
        return view('welcome', compact('slider', 'categories'));
    }
    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $categories = Category::get();
        $category = Category::where('slug', $category_slug)->first();

        if ($category) {

            $products = $category->products()->get();
            return view('frontend.collections.products.index', compact('category', 'products', 'categories'));
        } else {
            return redirect()->back();
        };
    }
    public function navbar()
    {
        $categories_all = Category::get();
        return view('layouts.navbar', compact('categories_all'));
    }
    
    public function productView(string $category_slug, string $product_slug)
    {
        $categories = Category::get();
        $category = Category::where('slug', $category_slug)->first();

        if ($category) {

            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {
                return view('frontend.collections.products.view', compact('product', 'category', 'categories'));
            } else {
                return redirect()->back();
            };
        } else {
            return redirect()->back();
        };
    }

    public function thankyou() {
        $categories = Category::get();
        return view('frontend.thank-you', compact('categories'));
    }
}
