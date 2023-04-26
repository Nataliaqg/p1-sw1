<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    protected $table='specializations';
    protected $guarded = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    public function Photographers(){
        return $this->hasMany(Photographers::class,'specialization_id');
    }
}
