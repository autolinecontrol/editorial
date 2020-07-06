<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
     // Instancio la tabla 'sucursales' 
     protected $table = 'sucursales';
    
     // Declaro los campos que usaré de la tabla 'jugos' 
     protected $fillable = ['codigo', 'domicilio', 'telefono'];
}
