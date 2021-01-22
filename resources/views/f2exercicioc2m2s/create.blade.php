@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F2Exercicioc2M2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'f2exercicioc2m2s.store']) !!}

                        @include('f2exercicioc2m2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
