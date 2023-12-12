<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checks extends Model
{
    use HasFactory;
    protected $table = 'check';
    public function cars()
    {
       return $this->hasMany('App\Models\car', 'id', 'car_id');
    }
    public function user()
    {
       return $this->hasMany('App\Models\user', 'id', 'user_id');
    }
}
