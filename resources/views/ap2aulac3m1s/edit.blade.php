@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap2Aulac3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap2aulac3m1, ['route' => ['ap2aulac3m1s.update', $ap2aulac3m1->id], 'method' => 'patch']) !!}

                        @include('ap2aulac3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection