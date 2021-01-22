<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendace->student_id }}</p>
</div>

<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $attendace->class_id }}</p>
</div>

<!-- Subject Id Field -->
<div class="form-group">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{{ $attendace->subject_id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="form-group">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $attendace->teacher_id }}</p>
</div>

<!-- Attendance Status Field -->
<div class="form-group">
    {!! Form::label('attendance_status', 'Attendance Status:') !!}
    <p>{{ $attendace->attendance_status }}</p>
</div>

