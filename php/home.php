<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/estilocss.css">
<head>
	<title>INICIO - Edolución</title>
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
 		<p>INICIO</p>
 	</div>
<div class="userad">
	<img src="../img/userph.png" class="userph">
	<p>¡Bienvenido, <b><?php echo $_SESSION['usuario']; ?>!</b></p>
</div>

	<div class="sidel">
		<h2>¿Quiénes somos?</h2>
		<p>Edolución <i>(Evolución de la educación)</i> es un proyecto hecho por dos estudiantes: <b>David Panesso y Julián Torres</b> del grado 11°1
		de la Institución Educativa Federico Ozanam, buscando proponer nuevas metodologías para solventar o incrementar el poco interés y/o aprendizaje de alumnos poco constantes en su proceso de formación.</p>
	</div>
	<div class="gbd">
		<h1>ÚLTIMAS NOTICIAS</h1>
			<div class="news"><h2>¡Lanzamiento oficial de la web Edolución!</h2>
				<p>Después de meses de trabajo, planeación y búsquedas estratégicas, la página web del programa Edolución concluyó sus pruebas funcionales para comenzar la interacción con nuestros usuarios.</p>
				<img src="../img/inicioft.png">
			</div>
	</div>
</body>

<div class=closec>
	<p><a href="../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h3>
</footer>
</html>
