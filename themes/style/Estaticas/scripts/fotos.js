$(function(){
	$(document).ready(function(){
			
			//$('.clearField').clearField();
			
			var div = $('<div></div>').addClass('.principal .degradadoar .imagencentrar #imagen .paginas');
			//$('.principal .degradadoar .imagencentrar #imagen ul').before(div);
			$('.principal .degradadoar .imagencentrar #imagen ul')
			.before(div)
			.cycle({
							     
								  
								  
								   fx:'fade',
								   pager:'.paginas',
								   speed:700,
							       timeout:3000,
								   pause:true,
								   pauseOnPagerHover:true,
									after: function(actual,proximo,opciones){
											 $('p, .barra',proximo).slideDown('fast');
											  
											 },
										
										 before: function(actual,proximo,opciones){
											 $('p, .barra', actual).slideUp('fast');
											 }
								
								 
								 
								 
								 });
			
    });	  	  
})