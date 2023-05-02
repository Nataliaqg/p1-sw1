<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table='subscriptions';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function Users(){
        return $this->hasMany(Users::class,'subscription_id');
    }

}
