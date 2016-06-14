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
    protected $fillable = ['folio','folio_orden', 'id_acta','status', 'acto'];

    public function acto(){
        return $this->belongsTo('App\actos', 'id');
    }
    public function orden(){
        return $this->belongsTo('App\ordenPago', 'folio');
    }
}
