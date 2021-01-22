<div class="table-responsive">
    <table class="table" id="p4exercicioc2m1s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($p4exercicioc2m1s as $p4exercicioc2m1)
            <tr>
                <td>{{ $p4exercicioc2m1->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['p4exercicioc2m1s.destroy', $p4exercicioc2m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('p4exercicioc2m1s.show', [$p4exercicioc2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('p4exercicioc2m1s.edit', [$p4exercicioc2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
