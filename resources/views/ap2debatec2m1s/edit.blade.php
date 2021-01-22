@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap2Debatec2M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap2debatec2m1, ['route' => ['ap2debatec2m1s.update', $ap2debatec2m1->id], 'method' => 'patch']) !!}

                        @include('ap2debatec2m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection