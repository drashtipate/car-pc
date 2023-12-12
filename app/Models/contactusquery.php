<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactusquery extends Model
{
    use HasFactory;
    public $table = 'contactusqueries';
    protected $fillable = ['name','emailId','contactnumber','message'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
