$(function(){
    $("#mostrarTC").on("click",mostrarForm);
    
    $("#mostrarCH").on("click",mostrarFormH);
    $("#cerrarCH").on("click",ocultarFormH);

    $("#mostrarAuto").on("click",mostrarFormAuto);
    $("#cerrarAuto").on("click",ocultarFormAuto);


    
    
})
//formulario registrar Tarjeta
function mostrarForm(){

    $("#formTC").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();
    $("#aprobacion").hide();

}


//formulario registrar Hipotecario
function mostrarFormH(){

    $("#formCH").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();

}
function ocultarFormH(){

    $("#formCH").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();
    //limpiar();

}

//formulario registrar Auto
function mostrarFormAuto(){

    $("#formAuto").show();
    $("#card2").hide();
    $("#card3").hide();
    $("#card1").hide();

}
function ocultarFormAuto(){

    $("#formAuto").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();
    //limpiar();

}

