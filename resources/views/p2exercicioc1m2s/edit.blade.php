@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P2Exercicioc1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p2exercicioc1m2, ['route' => ['p2exercicioc1m2s.update', $p2exercicioc1m2->id], 'method' => 'patch']) !!}

                        @include('p2exercicioc1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection