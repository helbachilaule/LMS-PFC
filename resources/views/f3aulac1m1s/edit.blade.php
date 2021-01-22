@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F3Aulac1M1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($f3aulac1m1, ['route' => ['f3aulac1m1s.update', $f3aulac1m1->id], 'method' => 'patch']) !!}

                        @include('f3aulac1m1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection