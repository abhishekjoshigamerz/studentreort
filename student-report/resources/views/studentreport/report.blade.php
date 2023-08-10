
@extends('layout')
@section('content')
<div class="container">
    {{-- checks if student data is there  --}}
    @if ($students->isEmpty())
        <div class="text-center mt-5">
            <h2>No student found</h2>
        </div>
        
    @else
        
    
    @foreach ($students as $student)
        <div class="text-center mt-5">
            <h2>{{ $student->name }}</h2>
            <p>Class: {{ $student->class }}</p>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Student Marks</th>
                    <th>Exam Marks</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student->marks as $mark)
                    <tr>
                        <td>{{ $mark->subject->name }}</td>
                        <td>{{ $mark->student_marks }}</td>
                        <td>{{ $mark->exam_marks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <p>
                Total Marks: {{ $student->totalMarks }} / {{ $student->totalMaxMarks }}<br>
                Result: {{ $student->result }} (In all subjects, need above 35 to pass)<br>
                Percentage: {{ number_format($student->percentage, 2) }}%
            </p>
        </div>
    @endforeach
</div>
@endif
@endsection
