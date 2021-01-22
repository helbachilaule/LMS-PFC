<!-- Exercicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exercicio', 'Exercicio:') !!}
    {!! Form::file('exercicio', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('e4exercicioc1m1s.index') }}" class="btn btn-default">Cancel</a>
</div>
