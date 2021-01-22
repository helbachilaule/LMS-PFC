<li class="{{ Request::is('e3aulac2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3aulac2m2s.index') }}"><i class="fa fa-edit"></i><span>E3Aulac2M2S</span></a>
</li>

<li class="{{ Request::is('e3aulac2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3aulac2m1s.index') }}"><i class="fa fa-edit"></i><span>E3Aulac2M1S</span></a>
</li>
<li class="{{ Request::is('e3exercicioc2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3exercicioc2m2s.index') }}"><i class="fa fa-edit"></i><span>E3Exercicioc2M2S</span></a>
</li>

<li class="{{ Request::is('e3exercicioc2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3exercicioc2m1s.index') }}"><i class="fa fa-edit"></i><span>E3Exercicioc2M1S</span></a>
</li>
<li class="{{ Request::is('e3debatec2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3debatec2m2s.index') }}"><i class="fa fa-edit"></i><span>E3Debatec2M2S</span></a>
</li>

<li class="{{ Request::is('e3debatec2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3debatec2m1s.index') }}"><i class="fa fa-edit"></i><span>E3Debatec2M1S</span></a>
</li>
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('e3aulac2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3aulac2m1s.index') }}"><span>Aula</span></a>
</li>            
          </div>
          <div class="form-group col-sm-6 col-md-4">
      
<li class="{{ Request::is('e3exercicioc2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3exercicioc2m1s.index') }}"><span>Exercicio</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
<li class="{{ Request::is('e3debatec2m1s*') ? 'active' : '' }}">
    <a href="{{ route('e3debatec2m1s.index') }}"><span>Debate</span></a>
</li>



          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
   <li class="{{ Request::is('e3aulac2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3aulac2m2s.index') }}"><span>Aula</span></a>
</li>          </div>
          <div class="form-group col-sm-6 col-md-4">
  <li class="{{ Request::is('e3exercicioc2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3exercicioc2m2s.index') }}"><span>Exercicio</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('e3debatec2m2s*') ? 'active' : '' }}">
    <a href="{{ route('e3debatec2m2s.index') }}"><span>Debate</span></a>
</li>

          </div>
</div>

</div>
@endsection
