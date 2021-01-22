<div class="table-responsive">
    <table class="table" id="e3debatec1m2s-table">
        <thead>
            <tr>
                <th>Debate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($e3debatec1m2s as $e3debatec1m2)
            <tr>
                
                <td>{{ $e3debatec1m2->debate }}</td>
                <td>
                    {!! Form::open(['route' => ['e3debatec1m2s.destroy', $e3debatec1m2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('e3debatec1m2s.show', [$e3debatec1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('e3debatec1m2s.edit', [$e3debatec1m2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
