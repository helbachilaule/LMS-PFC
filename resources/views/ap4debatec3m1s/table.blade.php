<div class="table-responsive">
    <table class="table" id="ap4debatec3m1s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ap4debatec3m1s as $ap4debatec3m1)
            <tr>
                <td>{{$ap4debatec3m1->debate}}</td>
                <td>
                    {!! Form::open(['route' => ['ap4debatec3m1s.destroy', $ap4debatec3m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ap4debatec3m1s.show', [$ap4debatec3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ap4debatec3m1s.edit', [$ap4debatec3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
