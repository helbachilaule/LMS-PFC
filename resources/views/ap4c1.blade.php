
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Administracao publica</center></h1><hr>






<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
                <li class="{{ Request::is('ap4aulac1m1s*') ? 'active' : '' }}">
    <a href="{{ route('ap4aulac1m1s.index') }}"><span>Aula</span></a>
</li>

            
          </div>
          <div class="form-group col-sm-6 col-md-4">
             <li class="{{ Request::is('ap4exercicioc1m1s*') ? 'active' : '' }}">
    <a href="{{ route('ap4exercicioc1m1s.index') }}"><span>Exercicio</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
             <li class="{{ Request::is('ap4debatec1m1s*') ? 'active' : '' }}">
    <a href="{{ route('ap4debatec1m1s.index') }}"><span>Debate</span></a>
</li>
          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
        
<li class="{{ Request::is('ap4aulac1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap4aulac1m2s.index') }}"><span>Aula</span></a>
</li>
            
          </div>
          <div class="form-group col-sm-6 col-md-4">
             <li class="{{ Request::is('ap4exercicioc1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap4exercicioc1m2s.index') }}"><span>Exercicio</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
             <li class="{{ Request::is('ap4debatec1m2s*') ? 'active' : '' }}">
    <a href="{{ route('ap4debatec1m2s.index') }}"><span>Debate</span></a>
</li>

          </div>
</div>

</div>
@endsection
