<div class="table-responsive">
    <table class="table" id="p2exercicioc1m1s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($p2exercicioc1m1s as $p2exercicioc1m1)
            <tr>
                <td>{{ $p2exercicioc1m1->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['p2exercicioc1m1s.destroy', $p2exercicioc1m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('p2exercicioc1m1s.show', [$p2exercicioc1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('p2exercicioc1m1s.edit', [$p2exercicioc1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
