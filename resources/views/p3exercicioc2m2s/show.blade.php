@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Exercicioc2M2
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('p3exercicioc2m2s.show_fields')
                    <a href="{{ route('p3exercicioc2m2s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
