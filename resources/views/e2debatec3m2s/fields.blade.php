<!-- Debate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debate', 'Debate:') !!}
file</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('e2debatec3m2s.index') }}" class="btn btn-default">Cancel</a>
</div>
