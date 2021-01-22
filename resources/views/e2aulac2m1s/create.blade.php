@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E2Aulac2M1
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'e2aulac2m1s.store']) !!}

                        @include('e2aulac2m1s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
