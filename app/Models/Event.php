<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table='events';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function Organizer(){
        return $this->belongsTo(Organizer::class,'organizer_id');
    }

    public function Photographies(){
        return $this->hasMany(Photography::class,'event_id');
    }

    public function Guests(){
        return $this->belongsToMany(Guest::class,'event_guest');
    }

    public function Photographers(){
        return $this->belongsToMany(Photographer::class,'event_photographer');
    }
}
