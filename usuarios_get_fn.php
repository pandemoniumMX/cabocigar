<?php

include'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $consulta = "SELECT * FROM usuarios where ID_USUARIO=$id";
   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    //"id"          =>  $id,
    "roll"        =>  $row["USU_ROLL"],
    "sta"       =>  $row["USU_STATUS"],
    "nom"        =>  $row["USU_NOMBRE"],
    "apep"         =>  $row["USU_APATERNO"],
    "apem"         =>  $row["USU_AMATERNO"],
    "usu"         =>  $row["USU_USUARIO"],
    "pas"         =>  $row["USU_CONTRA"],
    "mail"         =>  $row["USU_CORREO"],
    "cel"         =>  $row["USU_CELULAR"],
    "equi"         =>  $row["ID_NEGOCIO"],
    

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
