<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiendasModel;
class TiendasController extends Controller
{
    public function listarTiendas()
    {
       // Shops::select('id','name')->get();
       $tiendas = TiendasModel::all();
       return view('administrador',compact('tiendas'));
    }

    public function verTiendas(){
        
        $tiendas = TiendasModel::all();
        return view('insertar',compact('tiendas'));
    }


    public function verTiendasMod(){
        $tiendas = TiendasModel::all();
        return view('modificar',compact('tiendas'));
    }
}
