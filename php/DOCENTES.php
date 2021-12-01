<?php
session_start();

try {
  
  include "conexion.php";

  $sql="SELECT * FROM docentes";

  $consulta = $conexion->prepare($sql);

  $consulta -> execute();

  $cuenta = $consulta->fetchAll(PDO::FETCH_OBJ);  
   
}
catch(Exception $e){
  echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/cssdocentes.css">
<head>
	<title>DOCENTES - Edolución</title>
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
 		<p>DOCENTES</p>
 	</div>
 	 <div class="userinfo">
		<img src="../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>

	<div class="menuizq"><h1>ASIGNATURAS</h1>
		<div class="registro-docente"><a href="docente/registro-docs.html">REGISTRAR DOCENTE</a></div>
	</div>
	<div class="cuadrodocs"><h1>LISTADO DE DOCENTES</h1>
	<?php foreach ($cuenta as $profe) { ?>
	
		<div class="docn1"><p><b>• PROFESOR:</b> <?php echo $profe -> nombre?></p><p>    <div class="institext"></p><b><?php echo $profe -> institucion?></b><p></div>    </p><p><?php echo $profe -> materia ?></p><p> </p></div>
	<?php } ?>
		</div>
<div class="separadorinf"></div>
</body>
<div class=closec>
	<p><a href="../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h2>
</footer>
</html>