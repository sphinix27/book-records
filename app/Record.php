<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
    	'fiscode',
		'denouncer_id',
		'denounced_id',
		'crime_id',
		'state_id',
		'observation'
    ];


    public function denouncer()
    {
        return $this->belongsTo(Denouncer::class);
    }

    public function denounced()
    {
        return $this->belongsTo(Denounced::class);
    }

    public function crime()
    {
        return $this->belongsTo(Crime::class);
    }


    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
