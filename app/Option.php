<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['name', 'query'];

    public function api() {
    	return $this->belongsTo('App\Api');
    }

    public function actions() {
    	return $this->belongsToMany('App\Action');
    }
}
