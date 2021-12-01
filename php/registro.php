<?php
//recibe los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$correo_electronico = $_POST['correo_electronico'];
$grado = $_POST['grado'];

try {
	//Creamos la conexión PDO por medio de una instancia de su clase
	include "conexion.php";

	//generar la consulta sql
	$sql="INSERT INTO usuarios (id_usuario, nombre, apellido, nickname, password, correo_electronico, grado) VALUES (NULL, :nombre, :apellido, :nickname, :password, :correo_electronico, :grado)";

	//prepara al sistema para hacer una consulta
	$consulta = $conexion->prepare($sql);

	//ejecutar la consulta
	$consulta -> execute(array(
		':nombre' => $nombre,
		':apellido' => $apellido,
		':nickname' => $nickname,
		':password' => $password,
		':correo_electronico' => $correo_electronico,
		':grado' => $grado
		));

    header("location:../index.html");
      

}
catch(Exception $e){
	echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>