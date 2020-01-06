<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['title', 'slug', 'description', 'year', 'poster_vertical', 'poster_horizontal'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function getMoviePosterVerticalPathAttribute() {
        return url('storage/movie_posters/' . $this->poster_vertical );
    }

    public function getMoviePosterHorizontalPathAttribute() {
        return url('storage/movie_posters/' . $this->poster_horizontal );
    }
}
