<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Guest extends Model
{
    use HasFactory;
    protected $table='event_guest';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
    ];

    // public function Guest(){
    //     return $this->belongsTo(Guest::class,'guest_id');
    // }
    // public function Event(){
    //     return $this->belongsTo(Event::class,'event_id');
    // }
    
}
