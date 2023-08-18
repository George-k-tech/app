<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $categories = Category::all();
        $products = Product::all();
        $orders = Order::all();
        return view('admin.dashboard', compact('users', 'categories', 'products', 'orders'));
    }
  
}
