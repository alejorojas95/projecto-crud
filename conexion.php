<?php
	//conectamos Con el servidor
	#$conexion=new mysqli("localhost", "root", "", "crudphp2");

//definimos variables que contendrán los parámetros de conexión a la bdd
$mysql_host = "localhost"; 
$mysql_user = "root"; 
$mysql_pass = ""; 
$mysql_dbname = "crudphp2"; 



 $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_dbname);
    if (!$conn){
        echo "Error: No se pudo conectar a MySQL.";
        echo "error: " . mysqli_connect_error();
        exit;
    }
?>