<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    public $timestamp = false;
    protected $fillable = ['name'];

    public function options() {
    	return $this->belongsToMany('App\Option');
    }
}
