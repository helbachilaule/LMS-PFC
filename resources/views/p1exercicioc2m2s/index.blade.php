@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">P1Exercicioc2M2S</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('p1exercicioc2m2s.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('p1exercicioc2m2s.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

