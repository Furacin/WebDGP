<?php
    session_start();

   include("../modelo/modelo.php");
	$con = conectar();
	if (!$con) {
     die('Could not connect: ' . mysql_error());
    }
	
	$db=selectDB();
    if (!$db) {
     die('Could not select database: ' . mysql_error());
    }
	
    $cif=$_POST["cif"];
    $nombre=$_POST["nombre"];
	$ciudad=$_POST["ciudad"];
	$direccion=$_POST["direccion"];
	$descripcion=$_POST["descripcion"];
	$oferta=$_POST["oferta"];
	
	
	if(!registrarAlojamiento($cif,$nombre,$ciudad,$direccion,$descripcion,$oferta)){
		die('Could not insert: ' . mysql_error());
	}
	
	include "vista/vistaUsuarioRepresentante.php";

    mysql_close($con);

	
	header('Location: ../index.php');
   			
?>