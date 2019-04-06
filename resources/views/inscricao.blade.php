<?
@extends('app')

@section('centerContent')
	<div id="titulo">
	    <h1>INSCREVA-SE</h1>
	</div>      
@stop

@section('TituloAbrevContent')
	FAÇA PARTE DO SMM
@stop

@section('parte1Content')

    <div class="papai">
    

	   <div id="divREGR" class="divRegr">
        @include ('inscricaoPartes/formulario')
       <!-- @include ('inscricaoPartes/regras') -->
        </div>
        <div class="buttones">
                <a href="" class="btn btn-primary btnA btnI centrar next">Proximo</a>
            </div>
            
        <script>
            $('.prev').click(function(){
                alert("seguinte");
                $("#divREGR").load("/inscricaoPartes/regras.php");
            });
            
        </script>
    </div>
        
@stop
