@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap4Exercicioc1M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ap4exercicioc1m1, ['route' => ['ap4exercicioc1m1s.update', $ap4exercicioc1m1->id], 'method' => 'patch']) !!}

                        @include('ap4exercicioc1m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection