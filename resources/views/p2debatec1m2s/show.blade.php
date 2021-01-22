@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            P2Debatec1M2
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('p2debatec1m2s.show_fields')
                    <a href="{{ route('p2debatec1m2s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
