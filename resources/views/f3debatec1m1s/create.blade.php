@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F3Debatec1M1
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'f3debatec1m1s.store']) !!}

                        @include('f3debatec1m1s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
