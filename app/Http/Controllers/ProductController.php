<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {   
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect()->route('products.index')->with('message' , "Product Added SuccessFully");
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit' , compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "prod_name" => "required",
        ]);

        $product = Product::find($id);
        $product->prod_name = $request->prod_name;

        $product->save();
        return redirect()->route('products.index')->with('message' , "Product Updated SuccessFully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('products.index')->with('message' , "Product Deleted SuccessFully");
    }
}
