<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entraces extends Model
{
    protected $fillable=[
        'price',
        'hourEntrace',
        'salas_id'
    ];
}
