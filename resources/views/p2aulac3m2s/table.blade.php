<div class="table-responsive">
    <table class="table" id="p2aulac3m2s-table">
        <thead>
            <tr>
                <th>Aula</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($p2aulac3m2s as $p2aulac3m2)
            <tr>
                <td>{{ $p2aulac3m2->aula }}</td>
                <td>
                    {!! Form::open(['route' => ['p2aulac3m2s.destroy', $p2aulac3m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('p2aulac3m2s.show', [$p2aulac3m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('p2aulac3m2s.edit', [$p2aulac3m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
