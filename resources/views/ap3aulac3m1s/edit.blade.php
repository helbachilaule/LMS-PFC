@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap3Aulac3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap3aulac3m1, ['route' => ['ap3aulac3m1s.update', $ap3aulac3m1->id], 'method' => 'patch']) !!}

                        @include('ap3aulac3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection