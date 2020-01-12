<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $guarded = [];
    public function locals(){
    	return $this->hasMany('App\Local');
    }
}
