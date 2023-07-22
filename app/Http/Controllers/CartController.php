<?php

namespace App\Http\Controllers;

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
        $cart = session()->get('cart');

        dd($cart);
    }
    
}
