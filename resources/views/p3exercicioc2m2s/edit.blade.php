@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Exercicioc2M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p3exercicioc2m2, ['route' => ['p3exercicioc2m2s.update', $p3exercicioc2m2->id], 'method' => 'patch']) !!}

                        @include('p3exercicioc2m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection