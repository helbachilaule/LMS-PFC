@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Aulac3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p3aulac3m1, ['route' => ['p3aulac3m1s.update', $p3aulac3m1->id], 'method' => 'patch']) !!}

                        @include('p3aulac3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection