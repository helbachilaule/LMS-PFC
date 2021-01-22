<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Course Name</th>
        <th>Course Code</th>
        <th>Description</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->course_name }}</td>
            <td>@if(Auth::user()->roles_id <= 1)
                {{ $course->course_code }}
                @endif
            </td>

            <td>{{ $course->description }}</td>
            <td>
                @if($course->status = 1)
                <span class="text-success">Active</span>
            @else
            <span class="text-danger">In-Active</span>
            @endif
        </td>
                <td>
                    @if(Auth::user()->roles_id <= 1)
                    {!! Form::open(['route' => ['courses.destroy', $course->course_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$course->course_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">Ver</i></a>
                        <a href="{{ route('courses.edit', [$course->course_id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">Editar</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
