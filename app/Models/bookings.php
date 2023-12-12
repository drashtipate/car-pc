<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;
    protected $table = 'booking';
    public function cars()
   {
      return $this->hasMany('App\Models\car', 'id', 'car_id');
   }
   public function user()
   {
      return $this->hasMany('App\Models\user', 'id', 'user_id');
   }
   public function car_image()
   {
      return $this->hasOne('App\Models\car_image', 'car_id', 'car_id');
   }
 
    public $timestamps = false;
}
