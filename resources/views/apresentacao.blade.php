@extends('app')

@section('centerContent')
	<div id="titulo">
	    <h1>SOMADA MUSICA MARKET</h1>
	</div>      
@stop

@section('TituloAbrevContent')
	APRESENTAÇÃO
@stop

@section('parte1Content')
	
@stop

@section('eventoContent')
	
@stop

@section('parte2Content')
	<div class="partes" id="parte2">
	    <div style="width: 35%;text-align: center;" class="fotos mapa" id="foto1">
	    	<img src="svg/media/santa-catarina.png" style="width: 90%; transform: translateY(35%);">
	    </div>
	    <div style="width: 65%;" id="texto1" class="texto1">
	        <h3 class="infraTiti">ASSOMADA - SANTA CATARINA</h3>
	        <div class="descricao1" id="descricao1">
				<p class="textinho">Somada Music Market (SMM) é um mercado de música alternativa com o objetivo de promover a música feita pelos cabo-verdianos, de forma a criar maneiras que as suas obras sejam expostas aos profissionais com o intuíto de fazer com que os seus trabalhos tenham sustentabilidade a longo prazo.
				O evento tomará lugar nos dias 14 e 15 de Junho em Assomada.
	            </p>
	            <div class="resumo">
			        <span class="pri">
			            <div class="left">
			            	<img src="svg/media/ico1.png">
			            </div>
			            <div>
			            	<p class="textinho">Assomada - Rua Pedonal</p>
			            </div>
			        </span>
			        <span class="sec">
			            <div class="left">
			            	<img src="svg/media/ico2.png">
			            </div>
			            <div>
			            	<p class="textinho">Assomada - Rua Pedonal</p>
			            </div>
			        </span>
			    </div>
	        </div>
	    </div>
	    <div style="display: block; clear: both;"></div>
	</div>
	<div class="porDentro">
		<h3 class="infraTiti">fique por dentro</h3>
		<div class="divs" id="divRiba">
			<p class="firstt">15 de abril</p>
			<p class="secondd">Fim das candidaturas para showcases</p>
		</div>
		<div class="meio divs"></div>
		<div class="divs" id="divBaxo">
			<p class="firstt">14 & 15 de Junho</p>
			<p class="secondd">Somada Music Market 2019</p>
		</div>
		<div style="margin-top: 50px;">
            <a class="btn btn-primary btnA centrar btnB" href="inscricao">Inscrever</a>
        </div>
	</div>	
@stop

@section('patrocinadoresContent')
	@include ('partes/patrocinadores')
@stop

@section('footerContent')
	@include ('partes/footer')
@stop