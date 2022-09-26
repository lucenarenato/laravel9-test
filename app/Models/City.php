<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    public $timestamps = false;
    protected $fillable = [

        'title',
        'iso', //'ibge_code'
    ];

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}
