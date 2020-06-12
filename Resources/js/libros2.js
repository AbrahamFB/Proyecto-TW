$(document).on("ready", function(){
	$("form").submit(function(e){
		e.preventDefault();
		var datos = $(this).serialize();
		$.ajax({
			url: "../Controllers/clientes.php",
			type: "POST",
			data: datos + "&boton=registrar",
			success:function(resp){
				alert(resp);
			}
		});
	});
});