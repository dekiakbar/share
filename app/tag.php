<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tags';

    public function post(){
    	return $this->hasMany('App\posts','id');
    }
}

