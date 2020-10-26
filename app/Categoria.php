<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     //se conecta con la tabla y propiedades de categoria de la base de datos
    protected $table = 'categorias';
    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
