﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/favicon/AVEN.png">
    <title>Registro Supser</title>
    <link rel="stylesheet" href="CSS/Formulario-css.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
 
  
    <div class="content">
        <h1 class="logo">Supser-In-<span>Movies</span></h1>
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Registro Nuevo</h3>
                <form action="insertar.php" method="post">
                    <p>
                        <label>Nombre</label>
                        <input type="text" maxlength="30" name="nombre" required>
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="email" maxlength="20" name="correo" required>
                    </p>
                    <p>
                        <label>Numero de telefono</label>
                        <input type="text" maxlength="10" name="telefono" required>
                    </p>
                    <p>
                        <label>Ciudad</label>
                        <input type="text" maxlength="30" name="ciudad" required>
                    </p>
                    <p class="block">
                        <label>Cual Es Tu Pelicula Favorito</label>
                        <input type="text" name="pelicula" input required>

                    </p>
                    <p class="block">
                        <button type="submit" value="Enviar" name="guardar_registro" >
                            Enviar
                        </button>
                    </p>
                    <p class="block">
                        
                        <button formaction="Login.php">
                            <a href="Login.php">Cancelar Registro</a>
                        </button>
                    </p>
                </form>
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
            </div>
        </div>
    </div>
</body>
</html>