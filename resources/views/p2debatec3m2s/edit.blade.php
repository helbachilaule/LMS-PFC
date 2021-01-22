@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P2Debatec3M2
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($p2debatec3m2, ['route' => ['p2debatec3m2s.update', $p2debatec3m2->id], 'method' => 'patch']) !!}

                        @include('p2debatec3m2s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection