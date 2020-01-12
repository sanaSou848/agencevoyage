<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    //
    public function locals(){
    	return $this->HasMany('App\Local');
    }
}
