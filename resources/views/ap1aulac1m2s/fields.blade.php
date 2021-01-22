<div class="form-group">
	{{ Form::open(['files' => true])}}
    {!! Form::label('aula', 'Aula:') !!}
    {!! Form::file('aula', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ap1aulac1m2s.index') }}" class="btn btn-default">Cancel</a>
</div>
