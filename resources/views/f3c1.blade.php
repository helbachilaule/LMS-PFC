
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('f3aulac1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f3aulac1m1s.index') }}"><span>Aula</span></a>
</li></div>
          <div class="form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f3exercicioc1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f3exercicioc1m1s.index') }}"><span>Exercicios</span></a>
</li></div>
          <div class="form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('f3debatec1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f3debatec1m1s.index') }}"><span>Debate</span></a>
</li>
          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f3aulac1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f3aulac1m2s.index') }}"><span>Aula</span></a>
</li> </div>
          <div class="form-group col-sm-6 col-md-4">
    <li class="{{ Request::is('f3exercicioc1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f3exercicioc1m2s.index') }}"><span>Exercicios</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('f3debatec1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f3debatec1m2s.index') }}"><span>Debate</span></a>
</li>
          </div>
</div>

</div>
@endsection
