<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories'));
    }

    
}
