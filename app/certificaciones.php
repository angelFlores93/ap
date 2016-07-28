<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificaciones extends Model
{
    protected $table = 'certificaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','folioOrden', 'idActa','status', 'acto'];

    public function actos(){
        return $this->belongsTo('App\actos', 'acto');
    }
    public function orden(){
        return $this->belongsTo('App\ordenPago', 'folioOrden');
    }
}
