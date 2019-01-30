<?php   
include 'conexion.php';


$id = $_POST ['id'];
$car = $_POST ['car'];

$sql = "INSERT INTO caracteristicaxnegocio(CXN_ID_CARACTERISTICA, CXN_ID_NEGOCIO, CXN_ESTATUS)
VALUES ('$car', '$id', 'A');";
$res = $conn->query($sql);

echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($id), "','_self')</script>";


?>