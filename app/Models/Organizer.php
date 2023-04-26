<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $table='organizers';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Events(){
        return $this->hasMany(Events::class,'organizer_id');
    }
}
