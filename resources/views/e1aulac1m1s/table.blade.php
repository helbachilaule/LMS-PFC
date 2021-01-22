<div class="table-responsive">
    <table class="table" id="e1aulac1m1s-table">
        <thead>
            <tr>
                <th>Aula</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e1aulac1m1s as $e1aulac1m1)
            <tr>
                <td>{{ $e1aulac1m1->aula }}</td>
                <td>
                    {!! Form::open(['route' => ['e1aulac1m1s.destroy', $e1aulac1m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e1aulac1m1s.show', [$e1aulac1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e1aulac1m1s.edit', [$e1aulac1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
