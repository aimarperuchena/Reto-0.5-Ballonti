<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    protected $fillable=[
        'id_tienda',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'link_imagen',
        'link'
    ];
    
}
