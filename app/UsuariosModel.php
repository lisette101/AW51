<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = 'tb_usuarios';
    protected $primarykey = 'id_usuarios';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'fn',
        'img',
        'email',
        'pass',
        'activo'
    ];
}
