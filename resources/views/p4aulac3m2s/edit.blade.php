@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P4Aulac3M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p4aulac3m2, ['route' => ['p4aulac3m2s.update', $p4aulac3m2->id], 'method' => 'patch']) !!}

                        @include('p4aulac3m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection