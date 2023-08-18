<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Header;
use App\Models\Product;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        $headers = Header::all();
        $products = Product::all();
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories', 'headers'));
    }

    public function show($category_slug){
        
        $category = Category::where('slug',$category_slug)->first();
        return view('shop.show', compact('category'));
    }

    
}
