<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{

    protected $fillable = [
        'userId', 'title', 'description'
    ];

    public $timestamps = false;
}
