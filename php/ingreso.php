<?php
session_start();

$nickname = $_POST['nickname'];
$password = $_POST['password'];

try {
  	include "conexion.php";


    $sql="SELECT * FROM usuarios where nickname =:usuario and password = :password";


 	$consulta = $conexion->prepare($sql);


 	$consulta -> execute(array(
    	':usuario' => $nickname,
   	    ':password' => $password
    ));

  $cuenta = $consulta->rowCount();  
                if($cuenta > 0) 
                {    $_SESSION['usuario']=$nickname;
                     header("location:home.php");  
                }  
                else  
                {  
                      header("location:../index.html"); 
                }  
  

}
catch(Exception $e){
  echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>