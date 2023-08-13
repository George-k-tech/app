<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetail;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    public function detail(int $customer)
    {

        $customer = CustomerDetail::where('customer_id', $customer)->first();

        return view('order.view', compact('customer'));
    }
}
