@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            E1Aulac3M1
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('e1aulac3m1s.show_fields')
                    <a href="{{ route('e1aulac3m1s.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
