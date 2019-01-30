<?php   
include 'conexion.php';

$id = $_POST ['id'];
$nombre = $_POST ['nom'];
$roll = $_POST ['roll'];
$apep = $_POST ['apep'];
$apem = $_POST ['apem'];
$usu = $_POST ['usu'];
$pas = $_POST ['pass'];
$mail = $_POST ['mail'];
$cel = $_POST ['cel'];
$sta = $_POST ['sta'];

$sql = "UPDATE usuarios set USU_ROLL = '$roll',USU_STATUS='$sta', USU_NOMBRE = '$nombre', USU_APATERNO='$apep', 
USU_AMATERNO='$apem', USU_USUARIO='$usu', USU_CONTRA='$pas', USU_CORREO='$mail',USU_CELULAR='$cel' Where ID_USUARIO='$id' ";
$res = $conn->query($sql);


if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
 


echo "<script>window.open('usuarios.php','_self')</script>";}


?>