<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "bacospruebas";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM cliente  ORDER By id_cliente";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT id_cliente, nom_clie,edad, email_clie,telefono FROM cliente WHERE nom_clie  LIKE '%$q%' OR edad LIKE '$q' OR email_clie LIKE '$q' OR telefono LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table  class='table table-hover  colorTablas text-dark'>
    			<thead>
    				<tr id='titulo' class='table-dark'>
    					<td>ID</td>
    					<td>NOMBRE</td>
    					<td>EDAD</td>
    					<td>EMAIL</td>
    					<td>NUMERO</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id_cliente']."</td>
    					<td>".$fila['nom_clie']."</td>
    					<td>".$fila['edad']."</td>
    					<td>".$fila['email_clie']."</td>
    					<td>".$fila['telefono']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>