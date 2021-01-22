@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F4Exercicioc3M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f4exercicioc3m2, ['route' => ['f4exercicioc3m2s.update', $f4exercicioc3m2->id], 'method' => 'patch']) !!}

                        @include('f4exercicioc3m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection