<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class constancias extends Model
{
    protected $table = 'constancias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','folioOrden','status', 'acto'];

    public function acto(){
        return $this->belongsTo('App\actos', 'acto');
    }
    public function orden(){
        return $this->belongsTo('App\ordenPago', 'folioOrden');
    }
}
