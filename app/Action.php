<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = ['name', 'api_id'];

    public function api() {
    	return $this->belongsTo('App\Api');
    }

    public function options() {
    	return $this->belongsToMany('App\Option');
    }
}
