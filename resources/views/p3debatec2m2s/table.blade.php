<div class="table-responsive">
    <table class="table" id="p3debatec2m2s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($p3debatec2m2s as $p3debatec2m2)
            <tr>
                <td>{{ $p3debatec2m2->debate }}</td>
                <td>
                    {!! Form::open(['route' => ['p3debatec2m2s.destroy', $p3debatec2m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('p3debatec2m2s.show', [$p3debatec2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('p3debatec2m2s.edit', [$p3debatec2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
