<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    protected $table = 'productos';
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcionBreve', 'descripcion', 'precio', 'imagenDir', 'dst'];

}
