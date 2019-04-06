<?
@extends('app')

@section('centerContent')
	<div id="titulo">
	    <h1>CONTACTAR</h1>
	</div>      
@stop

@section('TituloAbrevContent')
	O QUE DESEJA SABER?
@stop

@section('parte1Content')


    

	<div id="contactare">
        <form action="_SELF" method="POST">
         <div>
             <input required="true" class="form-control place" type="text" name="nome" placeholder="Nome*">
         </div>
         <div>
             <input required="true" class="form-control place" type="email" name="email" placeholder="Email*">
         </div>
         <div class="form-group">
             <input type="text" placeholder="Assunto" name="assunto" class="form-control place divid">
             <select class="form-control divid" name="pais">
                <option>País</option>
                 <option>...</option>
                 <option>...</option>
                 <option>...</option>
                 <option>...</option>
             </select>
         </div>
         <div>
             <textarea required="true" placeholder="Mensagem*" class="form-control place textarea" name="comment"></textarea>
         </div>
         <div class="ult">
            <BUTTON type="submite" class="btn btn-primary btnA centrar btnE" href="#">Enviar</BUTTON>
            <p class="textinho">* campo obrigatório</p>   
         </div>  
        </form>
    </div>
@stop


@section('patrocinadoresContent')
	@include ('partes/patrocinadores')
@stop

@section('footerContent')
	@include ('partes/footer')
@stop