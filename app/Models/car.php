<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\car_image;

class car extends Model
{
   use HasFactory;
   protected $table = 'cars';

   // public $timestamps = false;
   public function car_images()
   {
      return $this->hasMany('App\Models\car_image', 'car_id', 'id');
   }
   public function car_image()
   {
      return $this->hasOne('App\Models\car_image', 'car_id', 'id');
   }
   public function brands()
   {
      return $this->hasOne('App\Models\brand', 'id', 'brand_id');
   }
   
   public function pincodes()
   {
      return $this->hasOne('App\Models\pincode', 'id', 'pincode');
   }
   public function countrys()
   {
      return $this->hasOne('App\Models\country','id','country');
   }

   public function states()
   {
      return $this->hasOne('App\Models\states','id','state');
   }
   public function cityes()
   {
      return $this->hasOne('App\Models\city','id','city');
   }
   public function booking()
   {
      return $this->hasOne('App\Models\bookings','id','car_id');
   }
   
   public $primaryKey = 'id';
    public $timestamps = true;
}
