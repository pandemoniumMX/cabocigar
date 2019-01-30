<?php   
include 'conexion.php';
$id = $_GET ['id'];

$sql = "DELETE FROM caracteristicaxnegocio WHERE ID_CXN=$id";
$res = $conn->query($sql);


echo "<script>window.open('modificar_empresa.php','_self')</script>";



?>