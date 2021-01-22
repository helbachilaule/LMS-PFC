@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F1Debatec2M2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'f1debatec2m2s.store']) !!}

                        @include('f1debatec2m2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
