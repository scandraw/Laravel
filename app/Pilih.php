<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilih extends Model
{
    protected $table='pilihs';

    public function holiday(){
    	// return $this->belongsTo('App\Pilih');
		return $this->belongsTo('App\Holiday');
    }
}
