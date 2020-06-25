var numero;
var contador;
contador=0;

function init(){
    $("#continuarTC").on("click",mostrarFC);
    $("#cerrarTC").on("click",ocultarDash);
    $("#btnBC").on("click",buroCredito);
    $("#btnF").on("click",fraudes);
    $("#btnD").on("click",duplicidad);
    $("#btnInv").on("click",investigacion);

    $('#addCredito').on("submit", function(e){
        guardaryeditar(e);
    })

}

function mostrarFC(){
    $("#aprobacion").show();
    //var namess=$("#fecha").val();
    //console.log(namess);
}

function ocultarDash(){
    $("#formTC").hide();
    $("#card2").show();
    $("#card3").show();
    $("#card1").show();
    limpiarTC();
}


function buroCredito(){   
    verificar();
    numero=Math.round(Math.random()*1);
    if(numero==0){
        $('#lbBC').removeClass('bg-light'),
        $('#lbBC').removeClass('bg-danger'),
        $('#lbBC').addClass('bg-success'),
        contador=contador+0;
    }else{
        $('#lbBC').removeClass('bg-light'),
        $('#lbBC').removeClass('bg-success'),
        $('#lbBC').addClass('bg-danger'),
        contador= contador+1;
        //verificar();
    }
    console.log(numero+" "+contador);
}

function fraudes(){
    verificar();
    numero=Math.round(Math.random()*1);
    if(numero==0){
        $('#lbF').removeClass('bg-light'),
        $('#lbF').removeClass('bg-danger'),
        $('#lbF').addClass('bg-success'),
        contador=contador+0;
    }else{
        $('#lbF').removeClass('bg-light'),
        $('#lbF').removeClass('bg-success'),
        $('#lbF').addClass('bg-danger'),
        contador=contador+1;
    }
    console.log(numero+" "+contador);

}

function duplicidad(){
    verificar();
    numero=Math.round(Math.random()*1);
    if(numero==0){
        $('#lbD').removeClass('bg-light'),
        $('#lbD').removeClass('bg-danger'),
        $('#lbD').addClass('bg-success'),
        contador=contador+0;
    }else{
        $('#lbD').removeClass('bg-light'),
        $('#lbD').removeClass('bg-success'),
        $('#lbD').addClass('bg-danger'),
        contador=contador+1;
    }
    console.log(numero+" "+contador);

}

function investigacion(){
    verificar();
    numero=Math.round(Math.random()*1);
    if(numero==0){
        $('#lbInv').removeClass('bg-light'),
        $('#lbInv').removeClass('bg-danger'),
        $('#lbInv').addClass('bg-success'),
        contador=contador+0;
    }else{
        $('#lbInv').removeClass('bg-light'),
        $('#lbInv').removeClass('bg-success'),
        $('#lbInv').addClass('bg-danger'),
        contador=contador+1;
    }
    console.log(numero+" "+contador);

}

function verificar(){
    if(contador==2){
        alert('Intentos terminados');
        $("#btnBC").prop('disabled', true);
        $("#btnF").prop('disabled', true);
        $("#btnD").prop('disabled', true);
        $("#btnInv").prop('disabled', true);
    }
}


function guardaryeditar(e)
{
	e.preventDefault(); 
	//$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#addCredito")[0]);

	$.ajax({
		url: "../controlador/creditos.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  console.log(datos);
			  alert('Credito Registrado');
             // bootbox.alert(datos);	 
              
	    }

	});
		//limpiar();
}


function limpiarTC(){
    $('#lbBC').addClass('bg-light'),
    $('#lbF').addClass('bg-light'),
    $('#lbD').addClass('bg-light'),
    $('#lbInv').addClass('bg-light');
    $("#btnBC").prop('disabled', false);
    $("#btnF").prop('disabled', false);
    $("#btnD").prop('disabled', false);
    $("#btnInv").prop('disabled', false);
    $('#id_medio').prop('selectedIndex',0);
    $('#id_cliente').prop('selectedIndex',0);
    $('#id_usuario').prop('selectedIndex',0);
    $('#fecha_solicitud').val("0000-00-00");
    $('#valor_solicitado').val("");
    $('#plazo').val("");
    $('#interes').val("");
    $('#periodo').val("");
    contador=0;
    console.log(contador);
}

init();