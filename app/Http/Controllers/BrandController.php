<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //// Controlador de Marca

    function __construct()
    {
        $this->middleware('auth');
    }


    function show_source()
    {
        $list = Brand::all();
        return view('brand/listb', ['brands' => $list]);
    }


    function form($id = null)
    {
        $brand = new Brand();

        if ($id != null) {
            $brand = Brand::findOrFail($id);
        }
        return view('brand/formb', ['brand' => $brand]);
    }


    function save(Request $request)
    {

        $request->validate([
            "nombre" => 'required|max:50'

        ]);


        $brand = new Brand();
        if ($request->id >0 ){
            $brand = Brand::findOrFail($request->id);
        }
        $brand->nombre = $request->nombre;

        $brand->save();

        return redirect('/brands')->with('message','Produto guardado');
    }


    function delete($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect('/brands');
    }




}
