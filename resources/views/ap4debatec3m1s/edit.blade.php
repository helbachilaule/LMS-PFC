@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap4Debatec3M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap4debatec3m1, ['route' => ['ap4debatec3m1s.update', $ap4debatec3m1->id], 'method' => 'patch']) !!}

                        @include('ap4debatec3m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection