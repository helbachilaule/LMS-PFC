<div class="table-responsive">
    <table class="table" id="ap2exercicioc2m1s-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ap2exercicioc2m1s as $ap2exercicioc2m1)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['ap2exercicioc2m1s.destroy', $ap2exercicioc2m1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ap2exercicioc2m1s.show', [$ap2exercicioc2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ap2exercicioc2m1s.edit', [$ap2exercicioc2m1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
