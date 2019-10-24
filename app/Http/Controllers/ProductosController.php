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

    public function verProductosMod(){
        $productos = ProductosModel::all();
        //eturn view('productos',compact('productos'));
        return view('modificar')->with('productos',$productos);
    }

    public function store(Request $request)
    {
        $producto = new ProductosModel();
        $producto->nombre = request('nombre');
        $producto->descripcion = request('descripcion');
        $producto->id_tienda= request("id_tienda");
        $producto->precio=request("precio");
        $producto->stock=request("stock");
        $producto->link=request("link");
        //$producto->link_imagen=request('imagen')->getClientOriginalName();
        
        
/*
        if($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/imagenes'.request("id_tienda"), $originalname);
        }
*/
        $producto->save();
        return('administracion');
    }

    public function updateStore(Request $request){
        

        

        $producto = ProductosModel::where('id',$request('id_producto'));

        $producto->stock = $request('stock_mod');

        $producto->save();

        return back();
    }
}
