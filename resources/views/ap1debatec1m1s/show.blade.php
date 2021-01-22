@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap1Debatec1M1
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ap1debatec1m1s.show_fields')
                    <a href="{{ route('ap1debatec1m1s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
