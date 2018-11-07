<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $table = 'exercicios';
    protected $fillable = ['id', 'descricao'];
    protected $guarded = ['id', 'etapa_exercicio', 'kit_exercicio'];
}