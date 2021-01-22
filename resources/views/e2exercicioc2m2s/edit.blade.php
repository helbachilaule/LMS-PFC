@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E2Exercicioc2M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e2exercicioc2m2, ['route' => ['e2exercicioc2m2s.update', $e2exercicioc2m2->id], 'method' => 'patch']) !!}

                        @include('e2exercicioc2m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection