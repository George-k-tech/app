<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::findOrFail($request->category_id);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/image/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/image/'), $filename);
        }

        $product = new Product;
        $product->name = $request->name;
        $product->image = $filename;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = Str::slug($request->name);

        $category->products()->save($product);

      return redirect('product')->with('message', 'producted created succefuly');  

       /*    $request->validate([
            'name' => 'required',
            'description' =>'required',
            'price' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); */


    }

    /**
     * Display the specified resource.
     */
    public function show($category_slug,$product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();

        $product = $category->products()->where('slug', $product_slug)->first();

        $category_id = $product->category_id;

        $relatedp = Product::where('category_id', $category_id)->where('slug', '!=', $product_slug)->get();

        return view('product.show', compact('product', 'category', 'relatedp'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $product)
    {
        $product = Product::findOrFail($product);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$product_id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/image/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/image/'), $filename);
        }
        $slug = Str::slug($request->name, '-');
        $product = Product::find($product_id);
        $product->image = $filename;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = $slug;
        $product->update();
        return redirect('product')->with('message', 'product updated succefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $product_id)
    {
        Product::findOrFail($product_id)->delete();
        return redirect('product')->with('message', 'product deleted');
    }
}
