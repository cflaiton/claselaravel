<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //// Controlador de Category

    function __construct()
    {
        $this->middleware('auth');
    }


    function show_source()
    {
        $list = Category::all();
        return view('category/listc', ['categories' => $list]);
    }


    function form($id = null)
    {
        $category = new Category();

        if ($id != null) {
            $category = Category::findOrFail($id);
        }
        return view('category/formc', ['category' => $category]);
    }


    function save(Request $request)
    {

        $request->validate([
            "nombre" => 'required|max:50',
            "descripcion" => 'required|max:50'

        ]);


        $category = new Category();
        if ($request->id >0 ){
            $category = Category::findOrFail($request->id);
        }
        $category->nombre = $request->nombre;
        $category->descripcion = $request->descripcion;

        $category->save();

        return redirect('/categories')->with('message','Produto guardado');
    }


    function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category');
    }





}
