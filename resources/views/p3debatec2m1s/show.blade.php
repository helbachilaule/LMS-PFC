@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P3Debatec2M1
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('p3debatec2m1s.show_fields')
                    <a href="{{ route('p3debatec2m1s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
