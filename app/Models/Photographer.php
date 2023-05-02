<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;
    protected $table='photographers';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Specialization(){
        return $this->belongsTo(Specialization::class,'specialization_id');
    }

    public function Events(){
        return $this->belongsToMany(Event::class,'event_photographer');
    }
}
