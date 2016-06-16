<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastname'];

    public function orden(){
        return $this->hasMany('App\ordenPago', 'resueltoPor', 'id');
    }
    
}
