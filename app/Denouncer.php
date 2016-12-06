<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denouncer extends Model
{
    protected $fillable = [
    	'firstname',
    	'lastname',
    	'ci'
    ];


    public function getFullnameAttribute()
    {
        return $this->firstname.' '.$this->lastname;
    }
}
