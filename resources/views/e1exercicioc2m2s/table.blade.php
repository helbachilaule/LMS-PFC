<div class="table-responsive">
    <table class="table" id="e1exercicioc2m2s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e1exercicioc2m2s as $e1exercicioc2m2)
            <tr>
                <td>{{ $e1exercicioc2m2->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['e1exercicioc2m2s.destroy', $e1exercicioc2m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e1exercicioc2m2s.show', [$e1exercicioc2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e1exercicioc2m2s.edit', [$e1exercicioc2m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
