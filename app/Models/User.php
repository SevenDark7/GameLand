<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'mobile_verified_at' => 'datetime',
    ];

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function blogComments(): HasMany
    {
        return $this->hasMany(BlogComment::class);
    }

    public function gameComments(): HasMany
    {
        return $this->hasMany(GameComment::class);
    }

    public function blogLikes(): HasMany
    {
        return $this->hasMany(BlogLike::class);
    }

    public function gameLikes(): HasMany
    {
        return $this->hasMany(GameLike::class);
    }
}
