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
    protected $fillable = ['folio','folio_orden','status', 'acto'];

    public function acto(){
        return $this->belongsTo('App\actos', 'id');
    }
    public function orden(){
        return $this->belongsTo('App\ordenPago', 'folio');
    }
}
