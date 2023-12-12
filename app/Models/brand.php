<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $table = 'brands';

    // public function cars(){

    //     return $this->hasMany(car::class);
    // }
//     public function cars()
//     {
//         return $this->hasMany(car::class, 'brand_id', 'id');
//    }
}
