<div class="table-responsive">
    <table class="table" id="attendaces-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attendance Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendaces as $attendace)
            <tr>
                <td>{{ $attendace->student_id }}</td>
            <td>{{ $attendace->class_id }}</td>
            <td>{{ $attendace->subject_id }}</td>
            <td>{{ $attendace->teacher_id }}</td>
            <td>{{ $attendace->attendance_status }}</td>
                <td>
                    {!! Form::open(['route' => ['attendaces.destroy', $attendace->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendaces.show', [$attendace->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('attendaces.edit', [$attendace->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
