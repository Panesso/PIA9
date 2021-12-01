<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/css-secundaria.css">
<head>
	<title>SECUNDARIA - Edolución</title>
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
 		<p>SECUNDARIA</p>
 	</div>
 	<div class="userinfo">
		<img src="../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>

	<div class="cuerpoizqa">
		<h2>ACTIVIDADES</h2>
			<p>- <a href="secundaria/SC-Lenguaje.php"> Lenguaje. </a> </p>
			<p>- <a href="secundaria/SC-Artes.php"> Artes. </a> </p>
			<p>- <a href="secundaria/SC-Sociales.php"> Sociales y Ciudadanas. </a> </p>
			<p>- <a href="secundaria/SC-Naturales.php"> Ciencias Naturales. </a> </p>
			<p>- <a href="secundaria/SC-Matematicas.php"> Matemáticas. </a> </p>
	</div>

	</div>

	<div class="cuerpoder">
		<div class="selectact">
			<div class="salute">
			<i><b><p style="color:white;">¡ H O L A !</p></b></i>
			</div>
			<br>
			<p> Bienvenido al área de <b class="titsec">SECUNDARIA</b>. </p>
			<p class="selectact2"> En esta categoría podrás encontrar las principales asignaturas para mejorar tu <b>proceso</b> de aprendizaje de acuerdo a tus expectativas y nivel que <b>consideres necesario.</b></p>
		</div>
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