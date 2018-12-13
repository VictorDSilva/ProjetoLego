<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $table = 'etapas';
    protected $fillable = ['id', 'descricao','audio_path', 'peca_etapa', 'concluido'];
    protected $guarded = ['id', 'peca_etapa'];

    //Relacionamento 1 para N
    public function exercicios()
    {
        return $this->hasMany('App\Exercicio', 'peca_etapa');
    }
}
