<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = ['movie_id', 'title', 'slug', 'duration', 'description', 'video_filename'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getHoursAttribute()
    {
        if($this->duration >= 60) {
            $minutes = $this->duration % 60;
            $hours = (($this->duration - $minutes) / 60) % 24;
            return $hours . "h " . $minutes . "m";
        } else {
            $minutes = $this->duration;
            return $minutes . "m";
        }
    }

    public function getS3Video()
    {
        return 'https://s3.eu-west-2.amazonaws.com/videos.patrykpilek.info/' . $this->video_filename;
    }
}
