<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT * FROM caracteristicas where ID_CARACTERISTICA=$id";
   $resultado = $conn->query($consulta);

   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id"        =>  $id,
    "nom"        =>  $row["CAR_NOMBRE"],
    "des"        =>  $row["CAR_DESCRIPCION"],
    "est"        =>  $row["CAR_ESTATUS"],
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
 