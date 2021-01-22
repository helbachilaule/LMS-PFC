
@extends('layouts.app')

@section('content')
<div class="container">
<h1><center>Licenciatura em Administracao publica</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-3">
            
            <li class="{{ Request::is('ap1aulac1m1s*') ? 'active' : '' }}">
                <a href="{{ route('ap1aulac1m1s.index') }}"><span>Aulas</span></a>
            </li>
           
            
          </div>
          <div class="form-group col-sm-6 col-md-3">
             <li class="{{ Request::is('ap1exercicioc1m1s*') ? 'active' : '' }}">
    <a href="{{ route('ap1exercicioc1m1s.index') }}"><span>Exercicios</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-3">
             <li class="{{ Request::is('ap1debatec1m1s*') ? 'active' : '' }}">
    <a href="{{ route('ap1debatec1m1s.index') }}"><span>Debate</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-3">
             
    <li><a href='{{ route('quizzap1c1m1') }}'><span>Quizz</span></a></li>

          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-3">       
            <li class="{{ Request::is('ap1aulac1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap1aulac1m2s.index') }}"><span>Aulas</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-3">
             <li class="{{ Request::is('ap1exercicioc1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap1exercicioc1m2s.index') }}"><span>Exercicios</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-3">
             <li class="{{ Request::is('ap1debatec1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap1debatec1m2s.index') }}"><span>Debates</span></a>
</li>
          </div>
           <div class="form-group col-sm-6 col-md-3">
             
    <li><a href='{{ route('quizzap1c1m2') }}'><span>Quizz</span></a></li>

          </div>
</div>

</div>
@endsection
