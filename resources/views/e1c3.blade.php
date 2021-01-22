
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('e1aulac3m1s*') ? 'active' : '' }}">
    <a href="{{ route('e1aulac3m1s.index') }}"></i><span>Aula</span></a>
</li>

          </div>
          <div class="form-group col-sm-6 col-md-4">
      
<li class="{{ Request::is('e1exercicioc3m1s*') ? 'active' : '' }}">
    <a href="{{ route('e1exercicioc3m1s.index') }}"></i><span>Exercicio</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
<li class="{{ Request::is('e1debatec3m1s*') ? 'active' : '' }}">
    <a href="{{ route('e1debatec3m1s.index') }}"></i><span>Debate</span></a>
</li>
          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
  <li class="{{ Request::is('e1aulac3m2s*') ? 'active' : '' }}">
    <a href="{{ route('e1aulac3m2s.index') }}">><span>Aula</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
  <li class="{{ Request::is('e1exercicioc3m2s*') ? 'active' : '' }}">
    <a href="{{ route('e1exercicioc3m2s.index') }}"><span>Exercicio</span></a>
</li>

          </div>
          <div class="form-group col-sm-6 col-md-4">
           
<li class="{{ Request::is('e1debatec3m2s*') ? 'active' : '' }}">
    <a href="{{ route('e1debatec3m2s.index') }}"><span>Debate</span></a>
</li>
          </div>
</div>

</div>
@endsection
