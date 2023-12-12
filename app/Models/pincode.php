<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pincode extends Model
{
    use HasFactory;
    protected $table='pincodes';

    public function country()
    {
       return $this->hasOne('App\Models\country', 'id','countries_id');
    }
 
    public function state()
    {
       return $this->hasOne('App\Models\state','id','states_id');
    }
   
    public function cityes()
    {
       return $this->hasOne('App\Models\city','id','citys_id');
    }
}
