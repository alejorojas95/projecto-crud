<?php include("conexion.php")?>

<?php

if(isset($_GET['idd'])){
        $codigo = $_GET['idd'];
        $query = "DELETE FROM registros WHERE id = $codigo";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "Eliminar.php";
    </script>
    

