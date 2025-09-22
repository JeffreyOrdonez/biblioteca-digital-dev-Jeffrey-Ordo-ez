<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuariomodel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['nombre',
     'apellido', 'email', 'password', 'tipo'];
}
