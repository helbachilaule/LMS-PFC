@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap3Aulac1M2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ap3aulac1m2s.store']) !!}

                        @include('ap3aulac1m2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
