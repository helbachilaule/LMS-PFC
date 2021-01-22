@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E3Exercicioc3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e3exercicioc3m1, ['route' => ['e3exercicioc3m1s.update', $e3exercicioc3m1->id], 'method' => 'patch']) !!}

                        @include('e3exercicioc3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection