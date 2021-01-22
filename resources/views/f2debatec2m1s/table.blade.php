<div class="table-responsive">
    <table class="table" id="f2debatec2m1s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($f2debatec2m1s as $f2debatec2m1)
            <tr>
                <td>{{ $f2debatec2m1->debate }}</td>
                <td>
                    {!! Form::open(['route' => ['f2debatec2m1s.destroy', $f2debatec2m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('f2debatec2m1s.show', [$f2debatec2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('f2debatec2m1s.edit', [$f2debatec2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
