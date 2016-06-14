<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenPago extends Model
{
    protected $table = 'orden_pagos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['folio', 'tipo', 'status', 'num_tramites'];

    public function certificacion(){
        return $this->hasMany('App\certificaciones', 'folio_orden', 'folio');
    }
    public function constancia(){
        return $this->hasMany('App\constancias', 'folio_orden', 'folio');
    }

}
