<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>Full Name</th>
        
        <th>Gender</th>
        <th>Email</th>
       
        <th>Phone</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->full_name }}</td>
            
            <td>{{ $teacher->gender }}</td>
            <td>{{ $teacher->email }}</td>
            
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->address }}</td>
           
                <td>
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teacher->teacher_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open">Ver</i></a>
                        <a href="{{ route('teachers.edit', [$teacher->teacher_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>Editar</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
