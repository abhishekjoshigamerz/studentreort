@extends('layout')

@section('content')
     <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                  <form action="{{ route('generate-report') }}" method="post">
                      @csrf 
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="student" id="studentName" placeholder="Enter student name">
                    </div>
                    <div class="mb-3">
                        <label for="studentClass" class="form-label">Student Class</label>
                        <input type="text" class="form-control"  name="class" id="studentClass" placeholder="Enter student class">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>

@endsection

