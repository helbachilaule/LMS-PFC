@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F4Exercicioc3M2
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('f4exercicioc3m2s.show_fields')
                    <a href="{{ route('f4exercicioc3m2s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
