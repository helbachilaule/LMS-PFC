@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E4Exercicioc1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e4exercicioc1m2, ['route' => ['e4exercicioc1m2s.update', $e4exercicioc1m2->id], 'method' => 'patch']) !!}

                        @include('e4exercicioc1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection