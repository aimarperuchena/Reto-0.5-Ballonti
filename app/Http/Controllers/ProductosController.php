<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\TiendasModel;
use Validator;

use DB;
class ProductosController extends Controller
{
    public function index(){
        $productos = ProductosModel::all();
        //eturn view('productos',compact('productos'));
        return view('productos')->with('productos',$productos);
    }

    public function listar($id){
        $productos = ProductosModel::where('id_tienda', $id)
               ->get();
        $nombre_tienda= TiendasModel::where('id', $id)->get();

                return view('productos',compact('productos'), compact('nombre_tienda'));
    }

    public function store(Request $request)
    {
        return view('administracion');
    }
}
