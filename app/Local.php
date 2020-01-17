<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $guarded = [];
    public function avi(){
    	return $this->belongsTo('App\Avi');
    }


    public function categorie(){
    	return $this->belongsTo('App\Categorie');
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
    public function place(){
        return $this->belongsTo('App\Place');
    }


    


}
