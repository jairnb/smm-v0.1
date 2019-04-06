$(document).ready(function(){
	$("#emRiba").hide();

	
	redimencionar();
	

	
	
	var pagina = $('#pagina').html();
	// $("#evento").hide();

              
	$('.menus').removeClass('active');
		switch(pagina){
			case "home":
			$('#home').addClass('active');
			break;

			case "apresentacao":
			$('#apresentacao').addClass('active');
			break;

			case "programa":
			$('#programa').addClass('active');
			break;

			case "contactar":
			$('#contactar').addClass('active');
			break;
		}

		$(window).resize(function(){
			redimencionar();
		});



});

$(document).scroll(function(){
 	var pos = $(document).scrollTop();
 	if (pos > 500) {
 		$("#emRiba").fadeIn(500);
 	}else $("#emRiba").fadeOut(500);
 });

function redimencionar(){
	$('#foto').height($('#texto').height());
	$('#foto1').height($('#texto1').height());
	$('.fota').height($('.fota').parent().height());

};