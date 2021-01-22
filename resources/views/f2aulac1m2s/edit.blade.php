@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F2Aulac1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f2aulac1m2, ['route' => ['f2aulac1m2s.update', $f2aulac1m2->id], 'method' => 'patch']) !!}

                        @include('f2aulac1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection