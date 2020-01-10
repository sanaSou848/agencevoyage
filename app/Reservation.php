<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function local(){
    	return $this->belongsTo('App\Local');
    }
}
