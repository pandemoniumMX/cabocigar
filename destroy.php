<?php
include 'conexion.php';

$var_id= $_SESSION['clave'];
session_destroy();

echo "<script>window.open('index.php','_self')</script>";


      
?>