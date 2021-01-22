@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E4Exercicioc3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e4exercicioc3m1, ['route' => ['e4exercicioc3m1s.update', $e4exercicioc3m1->id], 'method' => 'patch']) !!}

                        @include('e4exercicioc3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection