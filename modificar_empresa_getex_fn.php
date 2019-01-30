<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT n.ID_NEGOCIO, c.EXP_NIVEL, c.EXP_RANGO, c.EXP_FECHA_CADUCIDAD
  FROM   negocios  n, exposicion c
  WHERE n.ID_NEGOCIO = c.ID_NEGOCIO and n.ID_NEGOCIO=$id";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "id"        =>  $row["ID_NEGOCIO"],
    "expn"       =>  $row["EXP_NIVEL"],
    "expr"       =>  $row["EXP_RANGO"],
    "expf"       =>  $row["EXP_FECHA_CADUCIDAD"],
  );
   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>
