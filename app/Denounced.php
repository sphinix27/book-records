<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denounced extends Model
{
    protected $fillable = [
    	'firstname',
    	'lastname',
    	'ci'
    ];
}
