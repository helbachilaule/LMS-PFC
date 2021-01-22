
@extends('layouts.app')


@section('content')
<div class="container">
<h1><center>Licenciatura em Farmacia</center></h1><hr>

<div class="row tabela2">
                <span><center><Strong>Modulo 1</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('f1aulac1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1aulac1m1s.index') }}"><span>Aulas</span></a>
</li>



            
          </div>
          <div class="form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f1exercicioc1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1exercicioc1m1s.index') }}"><span>F1Exercicioc1M1S</span></a>
</li>


          </div>
          <div class="form-group col-sm-6 col-md-4">
            
<li class="{{ Request::is('f1debatec1m1s*') ? 'active' : '' }}">
    <a href="{{ route('f1debatec1m1s.index') }}"><span>F1Debatec1M1S</span></a>
</li>



          </div>
</div>
<div class="row tabela2">
                <span><center><Strong>Modulo 2</Strong></center></span><hr>
          <div class="text-center form-group col-sm-6 col-md-4">
            <li class="{{ Request::is('f1aulac1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1aulac1m2s.index') }}"><span>F1Aulac1M2S</span></a>
</li>
            
          </div>
          <div class="form-group col-sm-6 col-md-4">
    <li class="{{ Request::is('f1exercicioc1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1exercicioc1m2s.index') }}"><span>F1Exercicioc1M2S</span></a>
</li>
          </div>
          <div class="form-group col-sm-6 col-md-4">
           <li class="{{ Request::is('f1debatec1m2s*') ? 'active' : '' }}">
    <a href="{{ route('f1debatec1m2s.index') }}"><span>F1Debatec1M2S</span></a>
</li>

          </div>
</div>

</div>
@endsection
