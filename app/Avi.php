<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    //
    public function local(){
    	return $this->belongsTo('App\Local');
    }
}
