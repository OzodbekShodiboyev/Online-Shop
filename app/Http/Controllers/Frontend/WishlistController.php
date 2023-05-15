<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $categories_all = Category::get();
        return view('frontend.wishlist.index',compact('categories_all'));
    }
}
