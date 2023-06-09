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
        'created_at',
        'updated_at',
    ];

    public function Photographer(){
        return $this->belongsTo(Photographer::class,'photographer_id');
    }

    public function Event(){
        return $this->belongsTo(Event::class,'event_id');
    }

    public function Users(){
        return $this->belongsToMany(User::class,'user_photography');
    }
}
