<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Roll Me</th>
        <th>Full Name</th>
      
        
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Nationality</th>
        <th>Identity</th>
        <th>Emission Date</th>
        <th>User Id</th>
        <th>Class Id</th>
        <th>Father Name</th>
        <th>Father Phone</th>
        <th>Mother Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->roll_me }}</td>
            <td>{{ $admission->full_name }}</td>
            <td>{{ $admission->gender }}</td>
            <td>{{ $admission->email }}</td>
            <td>{{ $admission->dob }}</td>
            <td>{{ $admission->phone }}</td>
            <td>{{ $admission->address }}</td>
            <td>{{ $admission->nationality }}</td>
            <td>{{ $admission->identity }}</td>
            <td>{{ $admission->emission_date }}</td>
            <td>{{ $admission->user_id }}</td>
            <td>{{ $admission->class_id }}</td>
            
            <td>{{ $admission->father_name }}</td>
            <td>{{ $admission->father_phone }}</td>
            <td>{{ $admission->mother_name }}</td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admission->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admissions.edit', [$admission->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
