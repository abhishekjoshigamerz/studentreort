<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblstudentMark extends Model
{
    use HasFactory;

    protected $table = 'tblstudent_marks';
    protected $fillable = ['student_id', 'subject_id', 'student_marks', 'exam_marks'];

      public function student()
    {
        return $this->belongsTo(Tblstudent::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Tblsubject::class, 'subject_id');
    }

}
