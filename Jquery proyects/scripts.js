
	$(document).ready(function(){
		//asi indica que el control comienza en check
		$('#micheckbox').prop("checked",false);
		//asi podemos preguntar si esta check o no y regresar un valor
		$('#micheckbox').click(function(){
			if($('#micheckbox').is(':checked')){
				$('#div1').text('checked');
			}else{
					$('#div1').text('');
			}
		});
	});