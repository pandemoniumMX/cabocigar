<?php   
include 'conexion.php';

$id = $_POST ['id'];
$idn = $_POST ['idn'];
$car = $_POST ['car'];
$est = $_POST ['est'];



$sql = "UPDATE caracteristicaxnegocio set CXN_ID_CARACTERISTICA = '$car', CXN_ESTATUS='$est' Where ID_CXN='$id' ";
$res = $conn->query($sql);


echo "<script>window.open('modificar_empresa_car.php?id=", base64_encode($idn), "','_self')</script>";



?>