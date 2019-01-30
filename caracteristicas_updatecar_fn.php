<?php   
include 'conexion.php';

$id = $_POST ['id'];
$nom = $_POST ['noms'];
$des = $_POST ['dess'];
$est = $_POST ['ests'];




$sql = "UPDATE caracteristicas set CAR_NOMBRE = '$nom', CAR_DESCRIPCION='$des', CAR_ESTATUS='$est' Where ID_CARACTERISTICA='$id' ";
$res = $conn->query($sql);


if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
 


echo "<script>window.open('caracteristicas.php','_self')</script>";}


?>