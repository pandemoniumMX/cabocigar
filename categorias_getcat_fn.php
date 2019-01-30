<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT * FROM categorias where ID_CATEGORIA=$id";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id"        =>  $row["ID_CATEGORIA"],
    "cat"        =>  $row["CAT_NOMBRE"],
    "ramo"       =>  $row["ID_RAMO"],
    "sta"        =>  $row["CAT_ESTATUS"],
    "url"         =>  $row["CAT_URL"],    

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
 