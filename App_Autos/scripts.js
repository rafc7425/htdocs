
$(document).ready (function(){ 
	
	//asi indica que el control comienza en check
	$('#40-50').prop("checked",false);
	//asi podemos preguntar si esta check o no y regresar un valor
	$('#40-50').click(function(){
		if($('#40-50').is(':checked')){
			$('#cont').text('40,000-50,000'); // no logro que muestre el valor en forma de lista :c
		}else{
				$('#cont').text(''); //borra lo seleccionado 
		}
	});
	//precio 30-40
	$('#30-40').click(function(){
		if($('#30-40').is(':checked')){
			$('#cont').text('30,000-40,000');
		}else{
				$('#cont').text('');
		}
	});
	//30-40
	$('#30-40').click(function(){
		if($('#30-40').is(':checked')){
			$('#cont').text('30,000-40,000');
		}else{
				$('#cont').text('');
		}
	});
	//20-30
	$('#20-30').prop("checked",false);
	
	$('#20-30').click(function(){
		if($('#20-30').is(':checked')){
			$valor20 = '20,000-30,000';
			$('#cont').text($valor20)
		}else{
				$('#cont').text('');
		}
	});
	
});

$(document).ready (function(){
	//20-30
	$('#10-20').prop("checked",false);
	
	$('#10-20').click(function(){
		if($('#10-20').is(':checked')){
			$valor10 = '10,000-20,000';
			$('#cont').text($valor20)
		}else{
				$('#cont').text('');
		}
	});
})

