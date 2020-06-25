//Funcion para guardar o editar
var tabla;

function init(){
    $('#addCliente').on("submit", function(e){
        guardaryeditar(e);
    })
}

function limpiar(){
    $("#tipo_persona").val("");
	$("#nom_clie").val("");
	$("#tipo_documento").val("");
	$("#num_documento").val("");
	$("#edad").val("");
    $("#direccion_clie").val("");
    $("#email_clie").val("");
	$("#telefono").val("");
}

function guardaryeditar(e)
{
	e.preventDefault(); 
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#addCliente")[0]);

	$.ajax({
		url: "../controlador/clientes.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  console.log(datos);
			  alert('Usuario registrado');
             // bootbox.alert(datos);	 
              
	    }

	});
		limpiar();
}


init();