$("#fAcceso").on('submit',function(e)
{
	e.preventDefault();
    logina=$("#logina").val();
    clavea=$("#clavea").val();

    $.post("../controlador/usuario.php?op=verificar",
        {"logina":logina,"clavea":clavea},
        function(data)
    {
        //console.log(data);
       //data = JSON.parse(data);
       //console.log(data);
        if (data.length!=6)
        {
            if(data.length!=551){
                $(location).attr("href","escritorio.php");
                // console.log(data);
                //console.log(data.length);    
                console.log('Success');     
                
            }else{
                /*bootbox.alert("Usuario y/o Password incorrectos");
                console.log(data);
                console.log(data.length); 
                console.log('error'); 
                alert("Usuario incorrecto");   */
            }
             
        }else{
            alert("Usuario Incorrecto");   
            //bootbox.alert("Usuario y/o Password incorrectos");
        }
       
    });
})