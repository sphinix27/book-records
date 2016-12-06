<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name'];


    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('g:i a - j M Y');
    }
}
