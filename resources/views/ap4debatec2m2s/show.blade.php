@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ap4Debatec2M2
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ap4debatec2m2s.show_fields')
                    <a href="{{ route('ap4debatec2m2s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
