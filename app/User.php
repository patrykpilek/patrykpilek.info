<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyAlias;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $appends = [ 'avatar' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasManyAlias
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @return BelongsToMany
     */
    public function following()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'follower_id');
    }

    /**
     * @return BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany('App\User', 'follows', 'follower_id', 'user_id');
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return 'https://gravatar.com/avatar/' . md5($this->email) . '/?s=45&d=mm';
    }

    /**
     * @return string
     */
    public function getAvatarAttribute()
    {
        return $this->getAvatar();
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isNotTheUser(User $user)
    {
        return $this->id !== $user->id;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function isFollowing(User $user)
    {
        return (bool) $this->following->where('id', $user->id)->count();
    }

    /**
     * @param User $user
     * @return bool
     */
    public function canFollow(User $user)
    {
        if( !$this->isNotTheUser($user)) {
            return false;
        }
        return !$this->isFollowing($user);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function canUnFollow(User $user)
    {
        return $this->isFollowing($user);
    }
}
