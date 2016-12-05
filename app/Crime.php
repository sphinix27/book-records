<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $fillable = [
    	'article',
    	'subsection',
    	'name'
    ];
}
