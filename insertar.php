<?php
 include("conexion.php");
 
 
  if (isset($_POST['guardar_registro']) and $_POST['nombre'] != "" and $_POST['correo'] != "" and $_POST['telefono'] != "" and $_POST['ciudad'] != "" and $_POST['pelicula'] != ""){
	
	#definir datos para mysql
	$correo=$_POST['correo'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$ciudad=$_POST['ciudad'];
	$pelicula=$_POST['pelicula'];
	
	
	#insertando datos 
	$query="INSERT INTO registros(correo, nombre, telefono, ciudad, pelicula) VALUES ('$correo','$nombre','$telefono','$ciudad','$pelicula')";
	#verificar si guardo
	$comprobar = $conn->query($query);
	
    

	if($comprobar){
	    printf("<script type='text/javascript'>alert('REGISTRO EXITOSO *BIENVENIDO*'); </script>"); 
        printf("<script> window.location='login.php';</script>");
		echo "correcto sql";
	 

	}

	else{
		echo "error de insertar";
	}
}else{
	printf("<script type='text/javascript'>alert('X INGRESE LOS DATOS COMPLETOS X'); </script>"); 
    #printf("<script> window.location='Formulario.html';</script>");
	
}

?>
