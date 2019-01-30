<?php
require 'conexion.php';
	
$ID_CAT = $_POST['ID_CATEGORIA'];
	
$query = "SELECT * FROM subcategoria WHERE ID_CATEGORIA = '$ID_CAT' AND SUB_ESTATUS='A'";
$res = $conn->query($query);

$html= "<option value='0'>Seleccionar Subategoría</option>";

while($row = $res->fetch_assoc())
{
	$html.= "<option value='".$row['ID_SUBCATEGORIA']."'>".$row['SUB_NOMBRE']."</option>";
}

echo $html;
?>