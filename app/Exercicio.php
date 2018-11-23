<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $table = 'exercicios';
    protected $fillable = ['id', 'descricao'];
    protected $guarded = ['id', 'etapa_id', 'kit_id'];

    public function etapas()
    {
        return $this->hasMany('App\Etapa', 'etapa_id');
    }

}