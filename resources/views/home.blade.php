@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row tabela">
    	<h1>Cusrsos do ISEDEL</h1><hr>
    	<a href='{{ route('cadeiras_curso1') }}'>Licenciatura em Administracao Publica e Ciencia Politica </a><br>
  		<a href='{{ route('cadeiras_curso2') }}'>Licenciatura em Farmacia</a><br>
        <a href='{{ route('cadeiras_curso3') }}'>Licenciatura em Psicopedagogia</a><br>
    	<a href='{{ route('cadeiras_curso4') }}'>Licenciatura em Enfermagem e Saude Materno-Infantil</a><hr>

        
    	<a href="">Licenciatura em Nutricao(Nao funcional)</a><br>
    	
    	<a href="">Licenciatura em Contabilidade e Auditoria(Nao funcional)</a><br>
    	<a href="">Licenciatura em Gestao Ambiental, Higiene e Seguranca no Trabalho(Nao funcional)</a><br>
    	<a href="">Licenciatura em Administracao e Gestao Hospitalar(Nao funcional)</a><br>
    	<a href="">Mestrado em Antropologia Medica e Saude Publica(Nao funcional)</a><br>
    	<a href="">Mestrado em Ciencias de Educacao e Desenvolvimento Curricular(Nao funcional)</a></br>
    </div>

    
</div>
@endsection

