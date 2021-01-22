@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap1Aulac2M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap1aulac2m2, ['route' => ['ap1aulac2m2s.update', $ap1aulac2m2->id], 'method' => 'patch']) !!}

                        @include('ap1aulac2m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection