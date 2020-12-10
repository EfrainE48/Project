<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class functions extends Model
{
    protected $fillable =[
    'start',
    'end',
    'available',
    'type'
    ];
}
