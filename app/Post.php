<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body'
    ];

    /**
     * @var array
     */
    protected $appends = [
        'humanCreatedAt'
    ];

    /**
     * @return BelongsToAlias
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function getHumanCreatedAtAttribute() {
        return $this->created_at->diffForHumans();
    }
}
