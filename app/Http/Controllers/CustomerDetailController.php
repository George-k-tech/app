<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerDetail;

class CustomerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $customer)
    {
        $customer = CustomerDetail::where('customer_id', $customer)->first();

        return view('customerInfo.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customerInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         CustomerDetail::create([
            'customer_id' =>Auth()->user()->id,
            'name'=>Auth()->user()->name,
            'phone' => $request->phone,
            'region'=>$request->region,
            'area'=>$request->area,
            'additionalInfo'=>$request->additionalInfo,
        ]);

        return redirect()->route('cart.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $customer)
    {
        $customer = CustomerDetail::findOrFail($customer);
        
        return view('customerInfo.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$customer_id)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'region'=>'required',
            'area'=>'required',
            'additionalInfo'=>'required',
        ]);

        $customer = CustomerDetail::find($customer_id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->region = $request->region;
        $customer->area = $request->area;
        $customer->additionalInfo = $request->additionalInfo;
        $customer->update();
        return redirect()->route('cart.show')->with('message', 'Information Succefully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
