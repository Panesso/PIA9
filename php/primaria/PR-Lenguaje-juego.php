<?php
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../../css/cssprimaria.css">
<head>
	<title>PRIMARIA - Edolución</title>
</head>
<body>
<div class="encab">
<img src="../../img/logoleted.png" class="logohead">
	</div>
	<ul class="menu">
		<li><a href="../../php/home.php">INICIO </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/PRIMARIA.php">PRIMARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/SECUNDARIA.php">SECUNDARIA </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/DOCENTES.php">DOCENTES </a></li>
		<li class="barra"> | </li>
		<li><a href="../../php/perfil.php">PERFIL</a></li>	
	</ul>
 	<div class="secc">
 		<p>PRIMARIA</p>
 	</div>
	<div class="userinfo">
		<img src="../../img/userph.png" height="100">
		<p><?php echo $_SESSION['usuario']; ?></p>
	</div>

	<div class="derbody">
		<div class="cuerpo-juego">
			<iframe src="https://scratch.mit.edu/projects/105154468/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen class="juego-prlenguaje"></iframe>	
			<a href="PR-Lenguaje.php">VOLVER ATRÁS</a>
		</div>
	</div>
</body>


<div class=closec>
	<p><a href="../../../index.html"> SALIR </a></p>
</div>
<footer>
	<h3>Todos los derechos reservados — Edolución 2021.</h2>
</footer>
</html>