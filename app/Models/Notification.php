<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table='notifications';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Photography(){
        return $this->belongsTo(Photography::class,'photography_id');
    }
}
