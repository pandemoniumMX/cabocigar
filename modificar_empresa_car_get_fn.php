<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT n.ID_CARACTERISTICA, n.CAR_NOMBRE, e.CXN_ESTATUS, e.CXN_ID_NEGOCIO
  FROM   caracteristicas  n, caracteristicaxnegocio e
  WHERE n.ID_CARACTERISTICA = e.CXN_ID_CARACTERISTICA and e.ID_CXN=$id";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "id_car"       =>  $row["ID_CARACTERISTICA"],   
    "est"       =>  $row["CXN_ESTATUS"], 
    "idn"        =>  $row["CXN_ID_NEGOCIO"],


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
