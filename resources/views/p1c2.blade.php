
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
            <li class="{{ Request::is('p1aulac2m2s*') ? 'active' : '' }}">
    <a href="{{ route('p1aulac2m2s.index') }}"><span>aula</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
      <li class="{{ Request::is('p1exercicioc2m1s*') ? 'active' : '' }}">
    <a href="{{ route('p1exercicioc2m1s.index') }}"><span>Exercicios</span></a>
</li>

          </div>
          <div class="form-group col-sm-6 col-md-4">


<li class="{{ Request::is('p1debatec2m2s*') ? 'active' : '' }}">
    <a href="{{ route('p1debatec2m2s.index') }}"><span>Debate</span></a>
</li>

          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
  <li class="{{ Request::is('p1aulac2m1s*') ? 'active' : '' }}">
    <a href="{{ route('p1aulac2m1s.index') }}"><span>Aula</span></a>
</li>
            
          </div>
          <div class="form-group col-sm-6 col-md-4">
  
<li class="{{ Request::is('p1exercicioc2m2s*') ? 'active' : '' }}">
    <a href="{{ route('p1exercicioc2m2s.index') }}"><span>exercicios</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('p1debatec2m1s*') ? 'active' : '' }}">
    <a href="{{ route('p1debatec2m1s.index') }}"><span>Debate</span></a>
</li>

          </div>
</div>

</div>
@endsection
