<?php 

include("con_db.php"); 


if (isset($_POST['register'])) {

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['paterno']) >= 1 &&
	strlen($_POST['materno']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['direccion']) >= 1) {

	    $nombre = trim($_POST['nombre']);
	    $paterno = trim($_POST['paterno']);
		$materno = trim($_POST['materno']);
		$correo = trim($_POST['correo']);
		$direccion  = trim($_POST['direccion']);



	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO chofer (nombre, paterno, materno, correo, direccion, fecha_reg) 
		VALUES ('$nombre','$paterno', '$materno', '$correo', '$direccion', '$fechareg')";


	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

