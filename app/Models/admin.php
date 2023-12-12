<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;


    protected $guard = 'admin';
    public $table = 'admins';
    protected $fillable = ['email', 'password'];
    public $primaryKey = 'id';
    public $timestamps = false;
}
