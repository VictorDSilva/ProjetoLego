<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $guarded = array();
    public function kits() {
        return $this->belongsToMany('App\Kit', 'kit_peca');
    }

    public function etapas() {
        return $this->belongsToMany('App\Etapa', 'etapa_peca');
    }
}
