<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenPago extends Model
{
    protected $table = 'ordenPagos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['folio', 'tipo', 'status', 'numTramites', 'resueltoPor'];

    public function certificacion(){
        return $this->hasMany('App\certificaciones', 'folioOrden', 'id');
    }
    public function constancia(){
        return $this->hasMany('App\constancias', 'folioOrden', 'id');
    }
    public function user(){
        return $this->belongsTo('App\user', 'resueltoPor');
    }

}
