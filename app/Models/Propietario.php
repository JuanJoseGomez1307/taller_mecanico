<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propietario extends Model
{
    use HasFactory;
        protected $table = 'propietarios';
        protected $primaryKey = 'id';
        public $timestamps = false;
        protected $fillable = ['nombre', 'apellidos', 'telefono', 'email', 'direccion'];
}
