<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiendasModel extends Model
{
    protected $table = 'tiendas';
    protected $fillable = [
        'nombre'
    ];
}
