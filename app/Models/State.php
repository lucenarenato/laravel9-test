<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'letter' // abreviação
    ];

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}
