@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->id], 'method' => 'patch']) !!}

                  <div class="form-group col-sm-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                  </div>
                   <div>
                      {!!Form::submit('Update Day',['class' => 'btn btn-info'])!!}
                  </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection