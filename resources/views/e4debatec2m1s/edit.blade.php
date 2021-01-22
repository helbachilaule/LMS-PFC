@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E4Debatec2M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($e4debatec2m1, ['route' => ['e4debatec2m1s.update', $e4debatec2m1->id], 'method' => 'patch']) !!}

                        @include('e4debatec2m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection