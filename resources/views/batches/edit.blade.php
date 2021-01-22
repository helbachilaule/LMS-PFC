@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                  <div class="input-group col-md-12">
                    <span class="input-group-addon">Batch Year </span>
                    {!!Form::text('batch', null, ['class' => 'form-control']) !!}
                    
                  </div>

                  <div>
                      {!!Form::submit('Update Year',['class' => 'btn btn-info'])!!}
                  </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection