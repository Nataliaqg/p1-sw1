<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table='guests';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Events(){
        return $this->belongsToMany(Event::class,'event_guest');
    }

    public function Photographies(){
        return $this->belongsToMany(Photography::class,'guest_photography');
    }
}
