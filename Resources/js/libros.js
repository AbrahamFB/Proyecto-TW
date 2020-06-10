$(document).on("ready",function(){

});

function lista_libros(valor,pagina){
	$("#abrir-modal-libros").on("click", function(event){
		event.preventDefault();
		$("#idlib").val("");
		$("#formLibro")[0].reset();
	});
	$("#siguiente, #anterior").on("click", function(event){
		event.preventDefault();
			$.ajax({
			url:"../Controllers/libros.php",
			type: "POST",
			data:"boton=buscar2",
			dataType: "json",
			success:function(resp){
				alert(resp.titulo_libro);
			}
		});
	})
	var pagina=Number(pagina);
	$.ajax({
		url:'../Controllers/libros.php',
		type:'POST',
		data:'valor='+valor+'&pagina='+pagina+'&boton=buscar'
	}).done(function(resp){
		
		var d=resp.split("*");
		//Imprimimos los registro en nuestra Table
		var valores = eval(d[0]);
		html="<table class='table table-bordered'><thead><tr><th>#</th><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Año de Publicacion</th><th>Nro de Paginas</th><th>Ediccion</th><th>Idioma</th><td>Portada</td><th>Opciones</th></tr></thead><tbody>";
		for(i=0;i<valores.length;i++){
			datos=valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6]+"*"+valores[i][7];
			html+="<tr><td>"+valores[i][0]+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td><td>"+valores[i][5]+"</td><td>"+valores[i][6]+"</td><td>"+valores[i][7]+"</td><td><img src='../Resources/img/"+valores[i][8]+"' width='100px' height='100px'></td><td><button class='btn btn-warning' data-toggle='modal' data-target='#modallibros' onclick='mostrar("+'"'+datos+'"'+");'><span class='glyphicon glyphicon-pencil'></span></button><button class='btn btn-danger' onclick='eliminar("+'"'+valores[i][0]+'"'+")'><span class='glyphicon glyphicon-remove'></span></button></td></tr>";
		}
		html+="</tbody></table>"
		$("#lista").html(html);

		var totalreg= d[1];
		var nropaginador=Math.ceil(totalreg/3);
		var campobuscar=$("#buscar").val();
		//alert(nropaginador);
		paginar="<ul class='pagination'>";
		if(pagina>1)
		{
			paginar+="<li><a href='javascript:void(0)' onclick='lista_libros("+'"'+campobuscar+'","'+1+'"'+")'>&laquo;</a></li>";
			paginar+="<li><a href='javascript:void(0)' onclick='lista_libros("+'"'+campobuscar+'","'+(pagina-1)+'"'+")'>&lsaquo;</a></li>";

		}
		else
		{
			paginar+="<li class='disabled'><a href='javascript:void(0)'>&laquo;</a></li>";
			paginar+="<li class='disabled'><a href='javascript:void(0)'>&lsaquo;</a></li>";
		}

		
		
			limite = 10;
 

			div = Math.ceil(limite / 2);

			pagInicio = (pagina > div) ? (pagina - div) : 1;

			if (nropaginador > div)
			{
				pagRestantes = nropaginador - pagina;
				pagFin = (pagRestantes > div) ? (pagina + div) :nropaginador;
			}
			else 
			{
				pagFin = nropaginador;
			}
			for(i=pagInicio;i<=pagFin;i++){
				if(i==pagina)
					paginar+="<li class='active'><a href='javascript:void(0)'>"+i+"</a></li>";
				else
					paginar+="<li><a href='javascript:void(0)' onclick='lista_libros("+'"'+campobuscar+'","'+i+'"'+")'>"+i+"</a></li>";
			}
		
		

		if(pagina<nropaginador)
		{
			paginar+="<li><a href='javascript:void(0)' onclick='lista_libros("+'"'+campobuscar+'","'+(pagina+1)+'"'+")'>&rsaquo;</a></li>";
			paginar+="<li><a href='javascript:void(0)' onclick='lista_libros("+'"'+campobuscar+'","'+nropaginador+'"'+")'>&raquo;</a></li>";

		}
		else
		{
			paginar+="<li class='disabled'><a href='javascript:void(0)'>&rsaquo;</a></li>";
			paginar+="<li class='disabled'><a href='javascript:void(0)'>&raquo;</a></li>";
		}
		paginar+="</ul>";
		$("#paginador").html(paginar);
		
	});
}
function guardar(){
	var formData = new FormData($("#formLibro")[0]);
	$.ajax({
		url:'../Controllers/libros.php',
		type:'POST',
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
	}).done(function(resp){
		alert(resp);
		/*if(resp==='exito'){
			$('#exito').show();
			lista_libros('',1);
			$("#formLibro")[0].reset();
		}
		else{
			alert(resp);
		}*/
		
	});
	
}
function mostrar(datos){
	//alert(datos);
	var d=datos.split("*");
	//alert(d.length);
	$("#idlib").val(d[0]);
	$("#isbn").val(d[1]);
	$("#titulo").val(d[2]);
	$("#autor").val(d[3]);
	$("#añop").val(d[4]);
	$("#nrop").val(d[5]);
	$("#ediccion").val(d[6]);
	$("#idioma").val(d[7]);
}
function eliminar(id){
	//alert(id);
	$.ajax({
		url:'../Controllers/libros.php',
		type:'POST',
		data:'idlib='+id+'&boton=eliminar'
	}).done(function(resp){
		alert(resp);
		lista_libros('',1);
	});
	
}
function evaluar(campo,pag){
	alert("-"+campo+"-, "+pag);
}

function paginar(){
	$.ajax({
		url:"../Controllers/libros.php",
		type: "POST",
		data:"boton=buscar2",
		success:function(resp){
			alert(resp);
		}
	});
}