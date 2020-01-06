<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'avatar',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function following()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'follower_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'follows', 'follower_id', 'user_id')->withTimestamps();
    }

    public function getImageAttribute()
    {
        return url('storage/avatars/' . $this->avatar );
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function isNotTheUser(User $user)
    {
        return $this->id !== $user->id;
    }

    public function isFollowing(User $user)
    {
        return (bool) $this->following->where('id', $user->id)->count();
    }

    public function canFollow(User $user)
    {
        if( !$this->isNotTheUser($user)) {
            return false;
        }
        return !$this->isFollowing($user);
    }

    public function canUnFollow(User $user)
    {
        return $this->isFollowing($user);
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
}
