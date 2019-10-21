<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
class ProductosController extends Controller
{
    public function listarProductos($id){
        $productos = ProductosController::table('productos')->where('id_tienda', $id);
        return view('productos',compact('productos'));
    }
}
