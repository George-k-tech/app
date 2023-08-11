<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cart.index');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "image" => $product->image,
                "description" =>$product->description,
                "price"=>$product->price,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function updateProduct(Request $request){

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'cart successfully updated!');
        }
    }

    public function deleteProduct(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'deleted succefully');
        }
    }

    public function storeProduct(){

         $items = session()->get('cart');

         foreach ($items as $item){
            $item['user_id'] = auth()->id();
            $order = Order::create($item);
           /*  $order->user->name; */
        }
       
        return redirect()->back(); 

    }

    public function showProduct(){
        $info = CustomerDetail::all();

        return view('cart.show', compact('info'));
    }
    
}
