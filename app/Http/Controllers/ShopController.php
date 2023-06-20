<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }
}
