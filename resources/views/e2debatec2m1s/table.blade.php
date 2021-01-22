<div class="table-responsive">
    <table class="table" id="e2debatec2m1s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e2debatec2m1s as $e2debatec2m1)
            <tr>
                <td>{{ $e2debatec2m1->debate }}</td>
                <td>
                    {!! Form::open(['route' => ['e2debatec2m1s.destroy', $e2debatec2m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e2debatec2m1s.show', [$e2debatec2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e2debatec2m1s.edit', [$e2debatec2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
