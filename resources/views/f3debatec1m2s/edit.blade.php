@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F3Debatec1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f3debatec1m2, ['route' => ['f3debatec1m2s.update', $f3debatec1m2->id], 'method' => 'patch']) !!}

                        @include('f3debatec1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection