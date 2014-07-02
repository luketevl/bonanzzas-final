$(document).ready(function(){
	$('.slide > ul > li > a').click(function(){
		event.preventDefault();
		var valor = $(this).attr('href');
		$('#iframe_principal').attr('src', valor);
	});
});
