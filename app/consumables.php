<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consumables extends Model
{
    protected $fillable=[
        'name',
        'price',
        'quanty'
    ];
}
