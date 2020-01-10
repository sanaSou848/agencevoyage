<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    public function avis(){
    	return $this->hasMany('App\Avi');
    }


    public function categories(){
    	return $this->hasMany('App\Categorie');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
     public function reservations(){
    	return $this->hasMany('App\Reservation');
    }

    public function offres(){
    	return $this->hasMany('App\Offre');
    }


    


}
