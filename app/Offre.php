<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
	protected $guarded = [];
    public function local(){
    	return $this->belongsTo('App\Local');
    }
}
