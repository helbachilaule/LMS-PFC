@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P2Debatec1M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p2debatec1m2, ['route' => ['p2debatec1m2s.update', $p2debatec1m2->id], 'method' => 'patch']) !!}

                        @include('p2debatec1m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection