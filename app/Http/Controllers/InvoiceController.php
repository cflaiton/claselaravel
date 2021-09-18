<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Product;

class InvoiceController extends Controller
{
    //
function show(){
    $invoices = Invoice::all();
    //return dd($invoices);
    return view('invoice.list',compact('invoices'));

}

    function form(){
        $products = Product::all();
        return view ('invoice.form',['products'=>$products]);
    }

}
