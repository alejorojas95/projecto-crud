﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/login-css.css" />
    <link rel="icon" type="image/png" href="img/favicon/AVEN.png">
    <title>Iniciar Sesión</title>

</head>
<body>


    <div class="fondo">
        <h1 class="titulo">
            <span>S</span>
            <span>U</span>
            <span>P</span>
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>-</span>
            <span>I</span>
            <span>N</span>
            <span>-</span>
            <span>M</span>
            <span>O</span>
            <span>V</span>
            <span>I</span>
            <span>E</span>
        </h1>
    </div>
   
    <form class="box" method="post" >
        <h2>Iniciar Sesión</h2>
        <input type="text" name="correo" placeholder="Correo de Usuario" />
        <input type="password" name="contraseña" placeholder="Contraseña" />
        <input type="submit" name="entrar" value="Entrar" formaction="Contenido.php" />
        <input type="submit" name="registrarse" value="Registrarse" formaction="Formulario.php" />

    </form>

    <div class="audio">
        <audio id="demo" autoplay="autoplay" controls="controls" loop="loop" preload="auto">
            <source src="audios/intro-login.mp3" type="audio/mp3" />
            <p>Tu navegador no soporta reproduccion de audio HTML5</p>
        </audio>
    </div>

</body>
</html>