<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use Validator;

use DB;
class ProductosController extends Controller
{
    public function index(){
        $productos = ProductosModel::all();
        return view('productos',compact('productos'));
    }

    public function listar($id){
        $productos= ProductosModel::table('productos')
                ->where('id_tienda',$id);

                return view('productos',compact('productos'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
			
            'nombre' => 'required|unique:posts|max:255|min:1',
            'descripcion' => 'required|max:255|min:1',
            'precio' => 'required|numeric',
            'imagen' => 'file',
            'link' => 'max:255'
        ]);

        if ($validator->fails()) {
			return redirect('ProductosModel/create')
				->withErrors($validator)
				->withInput();
		}
		// Store post
		$post = Post::create($request->except('csrf'));
		return redirect(url('/'));
    }
}
