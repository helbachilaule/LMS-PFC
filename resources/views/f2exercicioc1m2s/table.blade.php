<div class="table-responsive">
    <table class="table" id="f2exercicioc1m2s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($f2exercicioc1m2s as $f2exercicioc1m2)
            <tr>
                <td>{{ $f2exercicioc1m2->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['f2exercicioc1m2s.destroy', $f2exercicioc1m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('f2exercicioc1m2s.show', [$f2exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('f2exercicioc1m2s.edit', [$f2exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
