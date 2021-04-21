<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosModel extends Model
{
    protected $table = 'tb_estados';
    protected $primarykey = 'id_estado';
    protected $fillable = ['nombre'];
}
