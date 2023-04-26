<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest_Photography extends Model
{
    use HasFactory;
    protected $table='guest_photography';
    protected $guarded = [
        'id',
        'guest_id',
        'photography_id',
        'created_at',
        'updated_at',
    ];

    // public function Guest(){
    //     return $this->belongsTo(Guest::class,'guest_id');
    // }

    // public function Photography(){
    //     return $this->belongsTo(Photography::class,'photography_id');
    // }
}
