<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
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
        $users = User::get();
        $categories = Category::get();
        $slider = Slider::where('status', '0')->get();
        $trendingProducts = Product::where('trending', '1')->latest()->take(15)->get();
        $newArrivalsProducts = Product::latest()->take(14)->get();
        $featuredProducts = Product::where('featured', '1')->latest()->take(14)->get();
        return view('welcome', compact('slider', 'categories', 'trendingProducts', 'newArrivalsProducts', 'featuredProducts', 'users'));
    }

    public function searchProducts(Request $request)
    {
        $searchQuery = $request->search;
    
        if ($searchQuery) {
            $categories = Category::where('name', 'LIKE', '%' . $searchQuery . '%')->get();
            $brands = Brand::where('name', 'LIKE', '%' . $searchQuery . '%')->get();
    
            $searchProducts = Product::where('name', 'LIKE', '%' . $searchQuery . '%')
                ->orWhereHas('category', function ($query) use ($searchQuery) {
                    $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                })
                ->latest()
                ->paginate(1);
    
            return view('frontend.pages.search', compact('searchProducts', 'categories', 'brands'));
        } else {
            return redirect()->back()->with('message', 'Natijalar topilmadi');
        }
    }    



    public function newArrival()
    {
        $categories = Category::get();
        $slider = Slider::where('status', '0')->get();
        $trendingProducts = Product::where('trending', '1')->latest()->take(15)->get();
        $newArrivalsProducts = Product::latest()->take(15)->get();
        return view('frontend.pages.new-arrival', compact('slider', 'categories', 'trendingProducts', 'newArrivalsProducts'));
    }


    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function featuredProducts()
    {
        $categories = Category::get();
        $slider = Slider::where('status', '0')->get();
        $trendingProducts = Product::where('trending', '1')->latest()->take(15)->get();
        $featuredProducts = Product::where('featured', '1')->latest()->get();
        return view('frontend.pages.featured-products', compact('featuredProducts', 'slider', 'categories', 'trendingProducts'));
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

    public function thankyou()
    {
        $categories = Category::get();
        return view('frontend.thank-you', compact('categories'));
    }
}
