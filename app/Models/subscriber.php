<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{
    use HasFactory;
    public $table = 'subscribers';
    protected $fillable = ['email'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
