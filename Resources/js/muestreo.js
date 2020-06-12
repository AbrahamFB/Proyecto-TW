$(document).on("ready", main);

function main(){
	paginar(1);
	$("#siguiente").on("click", function(event){
		event.preventDefault();
		pagina = $(this).val();
		paginar(pagina);
			/*$.ajax({
			url:"../Controllers/libros.php",
			type: "POST",
			data:"boton=buscar2",
			dataType: "json",
			success:function(resp){
				alert(resp.titulo_libro);
			}
		});*/
	});
	$("#anterior").on("click", function(event){
		event.preventDefault();
		pagina = $(this).val();
		paginar(pagina);
			/*$.ajax({
			url:"../Controllers/libros.php",
			type: "POST",
			data:"boton=buscar2",
			dataType: "json",
			success:function(resp){
				alert(resp.titulo_libro);
			}
		});*/
	})

}

function paginar(pagina){
	
	$.ajax({
		url:"../Controllers/libros.php",
		type: "POST",
		data:"pagina="+pagina+"&boton=buscar2",
		dataType: "json",
		success:function(resp){
			pagAnt = resp.paginaAnt;
			pagSig = resp.paginaSig;
			total_registros = resp.nro_rows;
			//alert(total_registros);
			if(pagAnt == 0){
				$("#anterior").addClass("disabled");
				$("#siguiente").val(pagSig);
			}
			else{
				$("#anterior").removeClass("disabled")
				$("#anterior").val(pagAnt);
				if (total_registros==(pagSig-1)) {
					$("#siguiente").addClass("disabled");
				}
				else{
					$("#siguiente").removeClass("disabled")
					$("#siguiente").val(pagSig);
				}
				


			}

			$("#isbn").val(resp.registro.isbn_libro);
			$("#titulo").val(resp.registro.titulo_libro);
			$("#autor").val(resp.registro.autor_libro);
			$("#añop").val(resp.registro.publicacion_libro);
			$("#nrop").val(resp.registro.paginas_libro);
			$("#ediccion").val(resp.registro.ediccion_libro);
			$("#idioma").val(resp.registro.idioma_libro);
		}
	});
}