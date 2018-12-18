<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{

    protected $table = 'etapas';
    protected $fillable = ['id', 'descricao','audio_path', 'peca_etapa', 'concluido'];
    protected $guarded = ['id', 'peca_etapa'];

    public function exercicios()
    {
        return $this->hasMany('App\Exercicio', 'etapa_exercicio');
    }
    public function etapa()
    {
        return $this->hasMany('App\Kit', 'peca_etapa');
    }
}
