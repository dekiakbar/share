<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';

    public function kategori(){
    	return $this->belongsTo('App\kategoris','category_id');
    }

    public function tag(){
    	return $this->belongsTo('App\tag','tag_id');
    }
}
