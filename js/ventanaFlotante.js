
var x; 
x = $(document); 
x.ready(mostrarLoginYRegistro); 
aler("ksjkjskdjksj")
function desapareceOscurecer(){
	$("#oscurecer").fadeOut();
}
function desapareceRegistro(){
	$("#registrar").fadeOut(300,desapareceOscurecer);
}
function mostrarFormulario(){
	$("#registrar").fadeIn();
	$("#oscurecer").click(desapareceRegistro);
}
function apareceRegistro(e){
    e.preventDefault();
    $("#oscurecer").fadeIn(500,mostrarFormulario);
}
function mostrarLoginYRegistro(){
	$("#activarCrear").click(apareceRegistro);
}
