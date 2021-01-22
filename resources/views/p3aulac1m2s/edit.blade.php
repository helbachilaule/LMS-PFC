@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Aulac1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p3aulac1m2, ['route' => ['p3aulac1m2s.update', $p3aulac1m2->id], 'method' => 'patch']) !!}

                        @include('p3aulac1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection