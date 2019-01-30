<?php   
include 'conexion.php';

$cat = $_POST ['categoria'];
$sub = $_POST ['subcat'];



$sql = "INSERT INTO subcategoria(SUB_NOMBRE, ID_CATEGORIA, SUB_ESTATUS)
VALUES ('$sub', '$cat', 'A');";
$res = $conn->query($sql);



echo "<script>window.open('categorias.php','_self')</script>";


?>