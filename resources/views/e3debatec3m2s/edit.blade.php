@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E3Debatec3M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e3debatec3m2, ['route' => ['e3debatec3m2s.update', $e3debatec3m2->id], 'method' => 'patch']) !!}

                        @include('e3debatec3m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection