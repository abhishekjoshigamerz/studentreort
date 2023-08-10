@foreach ($students as $student)
    <h2>{{ $student->name }}</h2>
    <p>Class: {{ $student->class }}</p>

   <table>
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

@endforeach





