<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposervicio extends Model
{
    public $timestamps = false;
    protected $table = 'tiposervicios';
    
    protected $fillable = ['Nombre', 'Descripcion', 'precio','foto'];
}


