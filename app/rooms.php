<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $fillable=[
        'chairs',
        'location',
        'capacity'
    ];
}
