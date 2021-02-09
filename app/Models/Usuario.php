<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model

{

    use HasFactory;

    protected $table='_usuario';
    protected $primaryKey='id';
    protected $fillable=
        [
            'Nombres','apellidos','correo','telefono'


        ];
}
