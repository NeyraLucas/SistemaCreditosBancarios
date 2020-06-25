$(function(){
    $("#regCH").on("click",mostrarForm);
    $("#regCS").on("click",ocultarForm);

    $("#verCH").on("click",mostrarForm2);
    $("#verCS").on("click",ocultarForm2);

    $("#bajaH").on("click",mostrarForm3);
    $("#bajaS").on("click",ocultarForm3);

    
})
//formulario registrar
function mostrarForm(){

    $("#formulario").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();

}
function ocultarForm(){

    $("#formulario").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();
    limpiar();

}
//forumalio ver
function mostrarForm2(){

    $("#dTables").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();

}
function ocultarForm2(){

    $("#dTables").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();
}
//form eliminar
function mostrarForm3(){

    $("#formulario").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();

}
function ocultarForm3(){

    $("#formulario").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();

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