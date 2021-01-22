@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F1Debatec3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f1debatec3m1, ['route' => ['f1debatec3m1s.update', $f1debatec3m1->id], 'method' => 'patch']) !!}

                        @include('f1debatec3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection