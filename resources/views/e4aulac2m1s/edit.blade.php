@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E4Aulac2M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e4aulac2m1, ['route' => ['e4aulac2m1s.update', $e4aulac2m1->id], 'method' => 'patch']) !!}

                        @include('e4aulac2m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection