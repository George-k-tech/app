<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    public function detail(){
        

        return view('order.view');
    }
}
