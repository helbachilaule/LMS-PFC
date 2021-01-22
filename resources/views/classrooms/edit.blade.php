@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classrooms
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classrooms, ['route' => ['classrooms.update', $classrooms->classroom_id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-6">
                        {!! Form::label('classroom_name', 'Classroom Name:') !!}
                        {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                    </div>

                    <!-- Classroom Code Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('classroom_code', 'Classroom Code:') !!}
                        {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Classroom Description Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('classroom_description', 'Classroom Description:') !!}
                        {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Classroom Status Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('classroom_status', 'Classroom Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('classroom_status', 0) !!}
                            {!! Form::checkbox('classroom_status', '1', null) !!}
                        </label>
                    </div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection