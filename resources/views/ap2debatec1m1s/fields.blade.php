<div class="form-group">
    {!! Form::label('debate', 'Debate:') !!}
    {!! Form::file('debate', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ap2debatec1m1s.index') }}" class="btn btn-default">Cancel</a>
</div>
