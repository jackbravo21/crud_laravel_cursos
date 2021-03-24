<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable =
    [

      'titulo', 'descricao', 'imagem', 'valor', 'publicado'

    ];
}
