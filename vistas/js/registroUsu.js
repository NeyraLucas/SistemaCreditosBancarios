//Funcion para guardar o editar
var tabla;

function init(){
    $('#registroUsu').on("submit", function(e){
        guardaryeditar(e);
    })
}

function guardaryeditar(e)
{
	e.preventDefault(); 
	const postData = {
		nom_usu:$('#nombre').val(),
		ape_p_usu:$('#apellidoP').val(),
		ape_m_usu:$('#apellidoM').val(),
		direccion_usu:$('#direccion').val(),
		email_usu:$('#email').val(),
		cargo_usu:$('#cargo').val(),
		login_usu:$('#login').val(),
		clave_usu:$('#clave').val()
	};
	console.log(postData);
	$.post('../controlador/usuario.php?op=guardaryeditar',postData, function(response){
		console.log(response);
	});
		limpiar();
}

function limpiar(){

}
init();