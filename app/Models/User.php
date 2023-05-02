<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'phone',
        'address',
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Subscription(){
        return $this->belongsTo(Subscription::class,'subscription_id');
    }

    public function Notifications(){
        return $this->hasMany(Notification::class,'user_id');
    }

    public function Guest(){
        return $this->hasOne(Guest::class,'user_id');
    }

    public function Photographer(){
        return $this->hasOne(Photographer::class,'user_id');
    }

    public function Organizer(){
        return $this->hasOne(Organizer::class,'user_id');
    }
}
