<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailMessage extends Model
{
    use HasFactory;
    public $table = 'email_messages';
    protected $fillable = ['title','subject','action','body'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
