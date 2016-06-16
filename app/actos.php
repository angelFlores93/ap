<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actos extends Model
{
    protected $table = 'actos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description'];

    public function certificacion(){
        return $this->hasMany('App\certificaciones', 'acto', 'id');
    }
    public function constancia(){
        return $this->hasMany('App\constancias', 'acto', 'id');
    }
}
