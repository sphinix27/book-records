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
}
