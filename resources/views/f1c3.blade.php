
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('f1aulac3m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1aulac3m1s.index') }}"><span>Aula</span></a>
</li>


            
          </div>
          <div class="form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f1exercicioc3m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1exercicioc3m1s.index') }}"><span>Exercicios</span></a>
</li>


          </div>
          <div class="form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f1debatec3m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1debatec3m1s.index') }}"><span>Debate</span></a>
</li>




          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
            <li class="{{ Request::is('f1aulac3m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1aulac3m2s.index') }}"><span>Aula</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
    <li class="{{ Request::is('f1exercicioc3m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1exercicioc3m2s.index') }}"><span>Exercicios</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('f1debatec3m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1debatec3m2s.index') }}"><span>Debate</span></a>
</li>
          </div>
</div>

</div>
@endsection
