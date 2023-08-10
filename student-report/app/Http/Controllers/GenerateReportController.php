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

        $students = Tblstudent::with(['marks.subject'])
            ->when($studentName, function ($query) use ($studentName) {
                $query->where('name', $studentName);
            })
            ->when($class, function ($query) use ($class) {
                $query->where('class', $class);
            })
            ->get();

        return view('studentreport.report', compact('students'));

    }
}
