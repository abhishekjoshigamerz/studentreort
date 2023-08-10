<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblstudent extends Model
{
    use HasFactory;

    protected $table = 'tblstudents';
    protected $fillable = ['name', 'email', 'mobile', 'class', 'division', 'dob'];

    public function marks()
    {
        return $this->hasMany(TblstudentMark::class, 'student_id');
    }

}
