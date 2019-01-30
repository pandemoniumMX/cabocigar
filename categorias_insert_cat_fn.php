<?php   
include 'conexion.php';

$ramo = $_POST ['ramo'];
$cat = $_POST ['cat'];
$url = $_POST ['url'];



$sql = "INSERT INTO categorias(CAT_NOMBRE, ID_RAMO, CAT_ESTATUS, CAT_URL)
VALUES ('$cat', '$ramo', 'A','$url');";
$res = $conn->query($sql);



echo "<script>window.open('categorias.php','_self')</script>";


?>