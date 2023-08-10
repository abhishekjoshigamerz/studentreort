<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblsubject extends Model
{
    use HasFactory;
    
    protected $table = 'tblsubjects';
    protected $fillable = ['name', 'code'];
    
}
