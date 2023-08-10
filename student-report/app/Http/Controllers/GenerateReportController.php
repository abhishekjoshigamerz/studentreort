<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblstudent;
use App\Models\Tblsubject;
use App\Models\TblstudentMark;

class GenerateReportController extends Controller
{
    public function generateReport(Request $request)
    {
        $studentName = $request->input('student');
        $class = $request->input('class');

        
        // $students = Tblstudent::with(['marks.subject'])
        //     ->when($studentName, function ($query) use ($studentName) {
        //         $query->where('name', $studentName);
        //     })
        //     ->when($class, function ($query) use ($class) {
        //         $query->where('class', $class);
        //     })
        //     ->get();

        $students = Tblstudent::with(['marks.subject'])
    ->when($studentName, fn ($query) => $query->where('name', $studentName))
    ->when($class, fn ($query) => $query->where('class', $class))
    ->get();
    

        foreach ($students as $student) {
            $totalMarks = 0;
            $totalMaxMarks = 0;
            
            foreach ($student->marks as $mark) {
                $totalMarks += $mark->student_marks;
                $totalMaxMarks += $mark->exam_marks;
            }
            
            $percentage = ($totalMarks / $totalMaxMarks) * 100;
            $result = $percentage >= 35 ? 'PASS' : 'FAIL';
            
            $student->totalMarks = $totalMarks;
            $student->totalMaxMarks = $totalMaxMarks;
            $student->percentage = $percentage;
            $student->result = $result;
        }

        return view('studentreport.report', compact('students'));
    }
}
