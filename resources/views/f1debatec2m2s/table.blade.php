<div class="table-responsive">
    <table class="table" id="f1debatec2m2s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($f1debatec2m2s as $f1debatec2m2)
            <tr>
                <td>{{ $f1debatec2m2->debate }}</td>
                <td>
                    {!! Form::open(['route' => ['f1debatec2m2s.destroy', $f1debatec2m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('f1debatec2m2s.show', [$f1debatec2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('f1debatec2m2s.edit', [$f1debatec2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
