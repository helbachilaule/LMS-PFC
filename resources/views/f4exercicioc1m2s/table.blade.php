<div class="table-responsive">
    <table class="table" id="f4exercicioc1m2s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($f4exercicioc1m2s as $f4exercicioc1m2)
            <tr>
                <td>{{ $f4exercicioc1m2->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['f4exercicioc1m2s.destroy', $f4exercicioc1m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('f4exercicioc1m2s.show', [$f4exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('f4exercicioc1m2s.edit', [$f4exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
