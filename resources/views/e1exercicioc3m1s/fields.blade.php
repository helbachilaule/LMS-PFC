<!-- Exercicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exercicio', 'Exercicio:') !!}
    {!! Form::text('exercicio', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('e1exercicioc3m1s.index') }}" class="btn btn-default">Cancel</a>
</div>
