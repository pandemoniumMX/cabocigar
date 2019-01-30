<?php   
include 'conexion.php';

$id = $_POST ['id'];
$expn = $_POST ['expn'];
$expf = $_POST ['expf'];
$expr = $_POST ['expr'];




$sql = "UPDATE exposicion set EXP_NIVEL = '$expn', EXP_RANGO='$expr', EXP_FECHA_CADUCIDAD='$expf' Where ID_NEGOCIO='$id' ";
$res = $conn->query($sql);


if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
 


echo "<script>window.open('modificar_empresa.php','_self')</script>";}


?>