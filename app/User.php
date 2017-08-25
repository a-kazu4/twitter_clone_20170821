<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function tweets()
    {
        return $this->hasMany('App\Tweet');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'friendships', 'followee_id', 'follower_id');
    }

    public function followings()
    {
        return $this->belongsToMany('App\User', 'friendships', 'follower_id', 'followee_id');
    }

    /**
     * 複数代入を行う属性
     *
     * @var array
     */
    protected $fillable = [
        'url_name',
        'email',
        'password',
        'display_name',
        'avatar',
        'description',
    ];

    /**
     * 配列には含めない属性
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
