<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';

    // public function input()
    // {
    // 	return $this->belongsTo('App\Input');
    // }

    public function inputs()
    {
    	return $this->hasOne('App\Input');
    }
}
