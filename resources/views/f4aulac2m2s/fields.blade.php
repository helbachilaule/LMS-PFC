<!-- Aula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aula', 'Aula:') !!}
    {!! Form::file('aula', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('f4aulac2m2s.index') }}" class="btn btn-default">Cancel</a>
</div>
