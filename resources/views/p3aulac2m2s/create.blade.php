@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Aulac2M2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'p3aulac2m2s.store']) !!}

                        @include('p3aulac2m2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
