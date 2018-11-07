<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $table = 'etapas';
    protected $fillable = ['id', 'descricao', 'audioPath', 'peca_id', 'numero', 'concluido'];
    protected $guarded = ['id', 'peca_id'];

    //Relacionamento 1 para N
    public function exercicios()
    {
        return $this->hasMany(Exercicio::class, 'etapa_id');
    }
}
