


@extends('app')


@section('centerContent')
	<div style="width:80%;" id="titulo">
	    <h1>SOMADA MUSIC MARKET</h1>
	</div>
	<div id="subTitulo">
	    <h2>FEIRA DA MÚSICA CABO VERDIANA</h2>
	    <p>ASSOMADA / JUNHO 2019</p>
	</div>         
@stop

@section('TituloAbrevContent')
	SMM 2019
@stop

@section('parte1Content')
	@include ('partes/parte1')
@stop

@section('eventoContent')
	@include ('partes/evento')
@stop

@section('parte2Content')
	@include ('partes/parte2')
@stop

@section('patrocinadoresContent')
	@include ('partes/patrocinadores')
@stop

@section('footerContent')
	@include ('partes/footer')
@stop
