<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Photographer extends Model
{
    use HasFactory;
    protected $table='event_photographer';
    protected $guarded = [
        'id',
        'event_id',
        'photographer_id',
        'created_at',
        'updated_at',
    ];

    // public function Photographer(){
    //     return $this->belongsTo(Photographer::class,'photographer_id');
    // }
    // public function Event(){
    //     return $this->belongsTo(Event::class,'event_id');
    // }
}
