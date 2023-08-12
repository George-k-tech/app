<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories'));
    }

    public function show($category_slug){
        
        $category = Category::where('slug',$category_slug)->first();
        return view('shop.show', compact('category'));
    }

    
}
