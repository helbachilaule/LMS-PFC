@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap3Debatec3M1
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ap3debatec3m1s.store']) !!}

                        @include('ap3debatec3m1s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
