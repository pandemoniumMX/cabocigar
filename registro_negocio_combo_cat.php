<?php
require 'conexion.php';
	
	$ID_RAMO = $_POST['ID_RAMO'];
	
	$queryM = "SELECT * FROM categorias WHERE ID_RAMO = '$ID_RAMO' AND CAT_ESTATUS='A'";
	$res = $conn->query($queryM);
	
	$html= "<option value='0'>Seleccionar Categoría</option>";
	
	while($row = $res->fetch_assoc())
	{
		$html.= "<option value='".$row['ID_CATEGORIA']."'>".$row['CAT_NOMBRE']."</option>";
	}
	
	echo $html;
?>