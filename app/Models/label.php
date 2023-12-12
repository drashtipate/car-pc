<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class label extends Model
{
    use HasFactory;
    public $table = 'labels';
    protected $fillable = ['label1','label2'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
