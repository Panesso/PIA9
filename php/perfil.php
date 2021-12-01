<?php
session_start();

try {
  
  include "conexion.php";

  $sql="SELECT * FROM usuarios where nickname = :usuario";

  $consulta = $conexion->prepare($sql);

  $consulta -> execute(array(
    ':usuario' => $_SESSION['usuario'] 
  ));

  $cuenta = $consulta->fetch(PDO::FETCH_OBJ);  
   
if($consulta -> rowCount() > 0)   {
  $id_usuario = $cuenta -> id_usuario; 
  $nickname = $cuenta ->  nickname;
  $password = $cuenta -> password;
  $correo_electronico = $cuenta -> correo_electronico;
 }
}
catch(Exception $e){
  echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/cssperfil.css">
<meta charset="utf-8">
<head>
	<title>MI PERFIL - Edolución</title>
</head>
<body>
<div class="encab">
<img src="../img/logoleted.png" class="logohead">
	</div>
	<ul class="menu">
		<li><a href="../php/home.php">INICIO </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/PRIMARIA.php">PRIMARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/SECUNDARIA.php">SECUNDARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/DOCENTES.php">DOCENTES </a></li>
		<li class="barra"> | </li>
		<li><a href="../php/perfil.php">PERFIL</a></li>	
	</ul>
 	<div class="secc">
 		<p>MI PERFIL</p>
 	</div>

 	<div class="cont-perfil">
 		<img class="fpf" src="../img/userph.png" height="150">

 	<p class="usname"><?php echo $_SESSION['usuario']; ?></p>
 		<div class="materias">
 			<p><img src="../img/areas/maths.png" height="15"> Matemáticas:</p>
 			<p><img src="../img/areas/spanish.png" height="15"> Idiomas:</p>
 			<p><img src="../img/areas/Biologia.png" height="15"> Ciencias:</p>
 			<p><img src="../img/areas/Artes.png" height="15"> Artes:</p>
 		</div>
 		<div class="nivmat">
 			<p>Nivel III.</p>
 			<p>Nivel II.</p>
 			<p><i>(No aplica)</i></p>
 			<p>Nivel V.</p>
 		</div>
 	<div class="vertbar"></div>
 	</div>
 	<div class="estpf">
 		<h2>Tu Información</h2>
		<form method="post" action="modificar.php">
			<p>ID de usuario</p><input type="text" value="<?php echo $id_usuario; ?>" name="id_usuario" disabled/>
				
			<p>Correo Electrónico:</p><input type="text" value="<?php echo $correo_electronico; ?>" name="correo_electronico" disabled/>
			
			<p>Contraseña:</p><input type="password" value="<?php echo $password; ?>" name="password" disabled/>

			<p>Nickname:</p><input type="text" value="<?php echo $nickname; ?>" name="nickname" disabled/>

			<br><br><br><br>

			<button>Modificar datos</button>
			</form>
 	</div>
</body>

<div class=closec>
	<p><a href="../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2020.</h2>
</footer>
</html>