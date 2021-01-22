@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap1Debatec1M2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ap1debatec1m2s.store']) !!}

                        @include('ap1debatec1m2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
