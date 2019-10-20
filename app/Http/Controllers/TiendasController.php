<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiendasModel;
class TiendasController extends Controller
{
    public function listarTiendas()
    {
       // Shops::select('id','name')->get();
        $tiendas = TiendasModel::All();
        return $tiendas->toJson();
    }
}
