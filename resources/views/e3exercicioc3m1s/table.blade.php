<div class="table-responsive">
    <table class="table" id="e3exercicioc3m1s-table">
        <thead>
            <tr>
                <th>Exercicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e3exercicioc3m1s as $e3exercicioc3m1)
            <tr>
                <td>{{ $e3exercicioc3m1->exercicio }}</td>
                <td>
                    {!! Form::open(['route' => ['e3exercicioc3m1s.destroy', $e3exercicioc3m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e3exercicioc3m1s.show', [$e3exercicioc3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e3exercicioc3m1s.edit', [$e3exercicioc3m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
