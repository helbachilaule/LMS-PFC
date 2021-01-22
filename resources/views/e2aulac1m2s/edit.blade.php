@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E2Aulac1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e2aulac1m2, ['route' => ['e2aulac1m2s.update', $e2aulac1m2->id], 'method' => 'patch']) !!}

                        @include('e2aulac1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection