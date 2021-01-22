@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P1Debatec3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p1debatec3m1, ['route' => ['p1debatec3m1s.update', $p1debatec3m1->id], 'method' => 'patch']) !!}

                        @include('p1debatec3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection