<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function local(){
    	return $this->belongsTo('App\Local');
    }
}
