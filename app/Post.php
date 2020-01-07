<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{

    protected $fillable = [
        'body'
    ];

    protected $appends = [
        'humanCreatedAt'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getHumanCreatedAtAttribute() {
        return Carbon::parse($this->created_at)->isoFormat('Do MMMM YYYY, h:mm:ss a');
    }
}
