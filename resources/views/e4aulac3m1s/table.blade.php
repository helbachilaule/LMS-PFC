<div class="table-responsive">
    <table class="table" id="e4aulac3m1s-table">
        <thead>
            <tr>
                <th>Aula</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e4aulac3m1s as $e4aulac3m1)
            <tr>
                <td>{{ $e4aulac3m1->aula }}</td>
                <td>
                    {!! Form::open(['route' => ['e4aulac3m1s.destroy', $e4aulac3m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e4aulac3m1s.show', [$e4aulac3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e4aulac3m1s.edit', [$e4aulac3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
