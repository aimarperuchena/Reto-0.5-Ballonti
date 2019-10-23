<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiendasModel;
class TiendasController extends Controller
{
  

    public function verTiendas(){
        $tiendas = TiendasModel::all();
        return view('administracion',compact('tiendas'));
    }
}
