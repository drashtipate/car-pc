<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userteam extends Model
{
    use HasFactory;
    public $table = 'userteams';
    protected $fillable = ['name','designation','image'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
