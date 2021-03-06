﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/favicon/AVEN.png">
    <title>Registro Supser</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="CSS/Formulario-css.css">
</head>
<body>
    <?php include("conexion.php")?>

    <div class="content">
	    <br />
        <h1 class="logo">TABLA GESTION DE<span> USUARIOS</span></h1>
		<br />

        <div class="contact-wrapper animated bounceInUp">
        <div class="contact-form">

        <div class="card text-center" >
        <div class="card-body">
            

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Ciudad</th>
                            <th>Pelicula</th>
                            <th>Fecha Registro</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM registros";
                        $result_user = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_user)){?>
                        <tr>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td><?php echo $row['ciudad']?></td>
                            <td><?php echo $row['pelicula']?></td>
                            <td><?php echo $row['fecha_registro']?></td>
							 <td>
                                    <a href="updateData.php?idd=<?php echo $row['id']?>">
                                    <button type="button" class="btn btn-warning" name="update">Modificar</button>
                                </a>
                                </td>
                            <td>
                                <a href="deleteData.php?idd=<?php echo $row['id']?>">
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </a>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
            </div>
            <div class="contact-info">
                <h4>Desarrollo</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> villavicencio/meta</li>
                    <li><i class="fas fa-phone"></i> (+57) 3204268786</li>
                    <li><i class="fas fa-envelope-open-text"></i> alejorojas95@gmail.com</li>
                </ul>
                <p>Dominio desarrollado con el fin, de conocer y descargar los videojuegos que menos exigen recursos de hardware en windows...</p>
                <p>supser-games.com</p>
				<button type="button" class="btn btn-primary" onclick="window.location.href='/Contenido.php'" >Regresar</button>
            </div>
        </div>
		
    </div>

	
	
</body>
</html>