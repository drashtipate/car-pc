<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    public $table = 'newsletters';
    protected $fillable = ['email'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
