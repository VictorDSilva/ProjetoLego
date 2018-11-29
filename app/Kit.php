<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kit extends Model
{
    protected $guarded = array();
    public function pecas() {
        return $this->belongsToMany('App\Peca', 'kit_peca');
    }
}