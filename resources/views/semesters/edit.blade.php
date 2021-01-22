@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Semesters
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($semesters, ['route' => ['semesters.update', $semesters->semester_id], 'method' => 'patch']) !!}

                                    <!-- Semester Name Field -->
<div class="form-group ">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    {!! Form::text('semester_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Semester Code Field -->
<div class="form-group">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    {!! Form::text('semester_code', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Semester Duration Field -->
<div class="form-group ">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    {!! Form::text('semester_duration', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Semester Description Field -->
<div class="form-group ">
    {!! Form::label('semester_description', 'Semester Description:') !!}
    {!! Form::textarea('semester_description', null, ['class' => 'form-control']) !!}
</div>

            <div>
                      {!!Form::submit('Update Semester',['class' => 'btn btn-info'])!!}
                  </div>
                       <!-- include('roles.fields') <-- -->

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection