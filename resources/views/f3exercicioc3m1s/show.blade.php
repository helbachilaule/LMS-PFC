@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            F3Exercicioc3M1
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('f3exercicioc3m1s.show_fields')
                    <a href="{{ route('f3exercicioc3m1s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
