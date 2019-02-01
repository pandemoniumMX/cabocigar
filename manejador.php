<head>
     <link rel="stylesheet" media="screen" type="text/css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<?php


session_start();
include 'conexion.php';
//if(isset($_POST['submit']))
//{

if ( (isset($_POST['user'])) || (isset($_POST['pass'])) ){


    $var_user = $_POST['user'];
	$var_contra = md5($_POST['pass']);






$query = "SELECT ID_USUARIO, USU_NOMBRE, USU_APELLIDOPAT, USU_ROLL, ID_SUCURSAL FROM tbl_usuarios where USU_USUARIO ='$var_user' and USU_CONTRASENA = '$var_contra'";
$resultado = $conn->query($query);


if($resultado->num_rows > 0){

	while($row = $resultado->fetch_assoc()) {
	$var_nombre = $row["USU_NOMBRE"];
	$var_apellidop = $row["USU_APELLIDOPAT"];
	$log_nom = $var_nombre. " ".$var_apellidop;
	$tipo = $row["USU_ROLL"];
	//Aspirantes

  if($tipo == '1'){
		  $_SESSION['clave'] = $row["ID_USUARIO"];
		  $_SESSION['sucursal'] = $row["ID_SUCURSAL"];
  		//$id = $row["ID_USUARIO"];//
		  $_SESSION['USU_NOMBRE']=$var_nombre;


  		header("location:administrador.php");
  	}
    
      if($tipo == '2'){
		$_SESSION['clave'] = $row["ID_USUARIO"];
		$_SESSION['sucursal'] = $row["ID_SUCURSAL"];
		$_SESSION['USU_NOMBRE']=$var_nombre;
		// $id = $_POST ['id_personal'];
			 header("location:inventario.php");
			}
    


    	 }//aqui termina el while

	}else{

    echo "<script>alert('Usuario o contraseña invalidos!')</script>";
        echo "<script>window.open('index.php','_self')</script>";}


	}else{
	header("location:index.php");
	}


//} else{
//}


?>
