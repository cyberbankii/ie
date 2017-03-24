<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = ['name'];

    public function apis() {
    	return $this->belongsToMany('App\Api');
    }
}
