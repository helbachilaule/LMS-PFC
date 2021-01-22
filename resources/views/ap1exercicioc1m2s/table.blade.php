<div class="table-responsive">
    <table class="table" id="ap1exercicioc1m2s-table">
        <thead>
            <tr>
               <th>Exercicio</th> 
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ap1exercicioc1m2s as $ap1exercicioc1m2)
            <tr>
                <td>{{$ap1exercicioc1m2->exercicio}}</td>
                <td>
                    {!! Form::open(['route' => ['ap1exercicioc1m2s.destroy', $ap1exercicioc1m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ap1exercicioc1m2s.show', [$ap1exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ap1exercicioc1m2s.edit', [$ap1exercicioc1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
