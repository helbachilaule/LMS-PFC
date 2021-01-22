@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Admissions</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#admission-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"> Add New</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admissions.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

