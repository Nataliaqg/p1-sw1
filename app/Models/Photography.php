<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    use HasFactory;
    protected $table='photographies';
    protected $guarded = [
        'id',
        'status',
        'price',
        'created_at',
        'updated_at',
    ];

    public function Photographer(){
        return $this->belongsTo(Photography::class,'photography_id');
    }

    public function Event(){
        return $this->belongsTo(Event::class,'event_id');
    }

    public function Guests(){
        return $this->belongsToMany(Guest::class,'guest_photography');
    }
}
