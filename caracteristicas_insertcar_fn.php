<?php   
include 'conexion.php';

$nom = $_POST ['nom'];
$des = $_POST ['des'];



$sql = "INSERT INTO caracteristicas(CAR_NOMBRE, CAR_DESCRIPCION, CAR_ESTATUS)
VALUES ('$nom', '$des', 'A');";
$res = $conn->query($sql);



echo "<script>window.open('caracteristicas.php','_self')</script>";


?>