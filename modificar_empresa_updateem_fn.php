<?php   
include 'conexion.php';

$id = $_POST ['id'];
$nom = $_POST ['nom'];
$raz = $_POST ['raz'];
$rfc = $_POST ['rfc'];
$res = $_POST ['res'];
$est = $_POST ['est'];
$dir = $_POST ['dir'];
$des = $_POST ['des'];
$eti = $_POST ['eti'];
$ram = $_POST ['ram'];
$cat = $_POST ['cat'];
$sub = $_POST ['sub'];


$sql = "UPDATE negocios set NEG_NOMBRE = '$nom',NEG_RAZONSOCIAL='$raz', NEG_RFC = '$rfc', NEG_DIRECCION='$dir', 
NEG_DESCRIPCION='$des', NEG_RESPONSABLE='$res', ID_SUBCATEGORIA='$sub', NEG_ESTATUS='$est',NEG_ETIQUETAS='$eti' Where ID_NEGOCIO='$id' ";
$res = $conn->query($sql);


if (!$res) {
    printf("Errormessage: %s\n", $conn->error);
 }
 else{
 


echo "<script>window.open('modificar_empresa.php','_self')</script>";}


?>