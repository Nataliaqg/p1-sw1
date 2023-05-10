<?php

namespace App\Models;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

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

    public function Photographies()
    {
        return $this->belongsToMany(Photography::class, 'user_photography');
    }
    public function ImOrganizer($event){
        if ($this->Organizer->id==$event->Organizer->id){
            return true;
        }
        return false;
    }

    public function ImPhotographer($event){
        $photographers=$event->Photographers;
        // foreach ($photographers as $photographer) {
        //     if ($photographer->id===$this->Photographer->id){
        //         return true;
        //     }
        // }
        $exist=$photographers->find($this->Photographer->id);
        if ($exist){
            return true;
        }
        return false;
    }

    public function ImGuest($event){
        $guests=$event->Guests;
        $exist=$guests->find($this->Guest->id);
        if ($exist){
            return true;
        }
        return false;
    }
}
