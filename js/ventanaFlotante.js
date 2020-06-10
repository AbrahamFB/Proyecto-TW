
var x; 
x = $(document); 
x.ready(mostrarLoginYRegistro); 

function desapareceOscurecer(){
	$("#oscurecer").fadeOut();
}
function desapareceRegistro(){
	$("#registrar").fadeOut(300,desapareceOscurecer);
}
function desoscurer(){
	$("#oscurecer2").fadeOut(300);
}
function oscurecer(e){
	e.preventDefault();
	$("#oscurecer2").fadeIn(300);
	//alert("wola");
	$("#elegirA").click(desoscurer);
}

function mostrarFormulario(){
	$("#registrar").fadeIn();
	$("#usuario").on("blur",function(){
		var nombre=$(this).val();
		var datoString="nombreusuario="+nombre;
		$.ajax({
			type:"POST",
			url:"../consultarNombre.php",
			data: datoString,
			success: function(data){
				$("#resultadouser").fadeIn(1000).html(data);
			}
		}
		);
	});
	$("#avatarOpcion").click(oscurecer);
	$("#oscurecer").click(desapareceRegistro);
}
function apareceRegistro(e){
	var x;
	e.preventDefault();
	$.get("../regresarIdioma.php", function(data,status){
		respuesta=eval(data);
		x=$("#sel1");
		for(i in respuesta)
		x.prepend("<option>"+respuesta[i]+"</option>");
	  });
	  $.get("../regresaClasi.php", function(data, status){
		respuesta=eval(data);
		x=$("#sel2");
		for(i in respuesta)
		x.prepend("<option>"+respuesta[i]+"</option>");
	  });

    $("#oscurecer").fadeIn(500,mostrarFormulario);
}
function mostrarLoginYRegistro(){
	$("#activarCrear").click(apareceRegistro);
}
