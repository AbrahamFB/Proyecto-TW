



//////////////
var x; 
x = $(document); 
x.ready(mostrarLoginYRegistro); 

function desapareceOscurecer(){
	$("#oscurecer").fadeOut();
}
function desapareceRegistro(){
	$("#registrar").fadeOut(800,desapareceOscurecer);
}
function insertar(){
	var usuario=$("#usuario").val();
	var idioma=$("#sel1").val();
	var clasificacion=$("#sel2").val();
	var rutaAvatar=$(".avatarOpcion").attr("src");
	var datoString="nombreusuario="+usuario+"&idioma="+idioma+"&clasificacion="+clasificacion+"&ruta="+rutaAvatar;
	
	if(usuario!=''){
		$.ajax({
			type:"POST",
			url:"../insertar.php",
			data: datoString,
			success: function(data){
				if(data=='1'){
					$("#alert").html("Se ha creado el nuevo perfil con exito");
					$("#alert").show();
					desapareceRegistro();
					$("#usuario").val("");

				}
				else{
					$("#alertd").html("El usuario ingresado ya existe");
					$("#alertd").show();
					$("#alertd").fadeOut(1000);
				}
				$("#alert").fadeOut(1000);
				
			}
		}
		
		);
		
	}
	else{
		$("#alertd").html("Hay campos vacios");
		$("#alertd").show();
	}	
	
}
function desoscurer(){
	$("#oscurecer2").fadeOut(300);
}
function colorear(){
//	var src = $(this).attr();

	//var s=src.attr("src").val;
//	console.log(src); 
	var src=$(this).attr("src");
	$(".avatarOpcion").attr("src",src);
	//$(".avatarOpcion").attr("src",".."+src);
	$("#oscurecer2").fadeOut(500);
	//$("#avatarOpcion").css("border","1px solid black")
//	for(i in avatars)
//	avatars.css("border","0px");
//	$(this).css("border-radius","100px");
//	$(this).css("border","1px solid white");
}
function oscurecer(e){
	e.preventDefault();
	$("#oscurecer2").fadeIn(300);
	alert("wola");
	$(".avatars").dblclick(colorear);
	$("#elegirA").click(desoscurer);
}

function mostrarFormulario(){
	$("#registrar").fadeIn();
	/*
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
	});*/
	$("#avatarOpcion").click(oscurecer);
	$("#oscurecer").click(desapareceRegistro);
	$("#crear").click(insertar);
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
