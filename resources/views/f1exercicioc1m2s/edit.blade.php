@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F1Exercicioc1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f1exercicioc1m2, ['route' => ['f1exercicioc1m2s.update', $f1exercicioc1m2->id], 'method' => 'patch']) !!}

                        @include('f1exercicioc1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection