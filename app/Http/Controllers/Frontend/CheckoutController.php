<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('frontend.checkout.index', compact('categories'));
    }
}
