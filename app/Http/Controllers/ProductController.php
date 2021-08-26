<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }



    function show_source()
    {
        $list = Product::all();
        return view('product/list', ['products' => $list]);
    }

    function form($id = null)
    {
        $product = new Product();

        if ($id != null) {
            $product = Product::findOrFail($id);
        }
        return view('product/form', ['product' => $product]);
    }

    function save(Request $request)
    {

        $request->validate([
            "name" => 'required|max:50',
            "cost" => 'required|numeric',
            "price" => 'required|numeric',
            "quantity" => 'required|numeric',
            "brand" => 'required|max:50',
        ]);


        $product = new Product();
        if ($request->id >0 ){
            $product = Product::findOrFail($request->id);
        }
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;

        $product->save();

        return redirect('/products')->with('message','Produto guardado');
    }

    function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products');
    }
}
