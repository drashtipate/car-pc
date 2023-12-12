<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userservice extends Model
{
    use HasFactory;
    public $table = 'userservices';
    protected $fillable = ['type','image','description'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
