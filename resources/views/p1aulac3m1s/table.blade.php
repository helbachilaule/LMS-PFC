<div class="table-responsive">
    <table class="table" id="p1aulac3m1s-table">
        <thead>
            <tr>
                <th>Aula</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($p1aulac3m1s as $p1aulac3m1)
            <tr>
                <td>{{ $p1aulac3m1->aula }}</td>
                <td>
                    {!! Form::open(['route' => ['p1aulac3m1s.destroy', $p1aulac3m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('p1aulac3m1s.show', [$p1aulac3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('p1aulac3m1s.edit', [$p1aulac3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
