<?php   
include 'conexion.php';

$nombre = $_POST ['nom'];
$roll = $_POST ['roll'];
$apep = $_POST ['apep'];
$apem = $_POST ['apem'];
$usu = $_POST ['usu'];
$pas = $_POST ['pas'];
$mail = $_POST ['mail'];
$cel = $_POST ['cel'];


$sql = "INSERT INTO usuarios(USU_ROLL, USU_STATUS, USU_NOMBRE, USU_APATERNO, USU_AMATERNO, USU_USUARIO, USU_CONTRA, USU_CORREO, USU_CELULAR)
VALUES ('$roll', 'A', '$nombre','$apep','$apem','$usu','$pas','$mail','$cel');";
$res = $conn->query($sql);



echo "<script>window.open('usuarios.php','_self')</script>";


?>