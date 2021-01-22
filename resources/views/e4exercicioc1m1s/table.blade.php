<div class="table-responsive">
    <table class="table" id="e4exercicioc1m1s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e4exercicioc1m1s as $e4exercicioc1m1)
            <tr>
                <td>{{ $e4exercicioc1m1->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['e4exercicioc1m1s.destroy', $e4exercicioc1m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e4exercicioc1m1s.show', [$e4exercicioc1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e4exercicioc1m1s.edit', [$e4exercicioc1m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
