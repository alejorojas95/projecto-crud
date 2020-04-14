<?php include("conexion.php")?>

<?php
if(isset($_GET['idd'])){
$codigo = $_GET['idd'];
$query = "SELECT * FROM registros WHERE id= $codigo";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);

	$correo=$row['correo'];
	$nombre=$row['nombre'];
	$telefono=$row['telefono'];
	$ciudad=$row['ciudad'];
	$pelicula=$row['pelicula'];
    }
}
if (isset($_POST['update2'])){

    $codigo = $_GET['iddd'];
	$correo=$_POST['correo'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$ciudad=$_POST['ciudad'];
	$pelicula=$_POST['pelicula'];

	echo $codigo;
    $query = "UPDATE registros SET correo = '$correo', nombre = '$nombre', telefono = '$telefono', ciudad = '$ciudad', pelicula = '$pelicula' WHERE id = $codigo";
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "Eliminar.php";
        </script>
        <?php 
    }
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
div{
	background: rgba(34, 34, 34, 0.57);
}
h1{
	color: green;
}
label{
	color:red;
}
p{
	color: #fff;
}
</style>

<div class ="card text-center">

        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Auditar datos de interes:</p>
         
            <form action="updateData.php?iddd=<?php echo $_GET['idd']; ?>" method="POST">

			<div class="form-group">
			<label for="Name">Correo:</label>
            <input type="text" name="correo" value="<?php print $correo;?>"class = "form-control" placeholder="Actualizar correo">
            </div>

            <div class="form-group">
			<label for="Name">Nombre:</label>
            <input type="text" name="nombre" value="<?php print $nombre;?>"class = "form-control" placeholder="Actualizar Nombres">
            </div>

			<div class="form-group">
			<label for="Name">Telefono:</label>
            <input type="text" name="telefono" value="<?php print $telefono;?>"class = "form-control" placeholder="Actualizar Nombres">
            </div>

		    <div class="form-group">
			<label for="Name">Ciudad:</label>
            <input type="text" name="ciudad" value="<?php print $ciudad;?>"class = "form-control" placeholder="Actualizar Nombres">
            </div>
			
		    <div class="form-group">
			<label for="Name">Peliculas:</label>
            <input type="text" name="pelicula" value="<?php print $pelicula;?>"class = "form-control" placeholder="Actualizar Nombres">
            </div>

           
            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div>    

     
    
    