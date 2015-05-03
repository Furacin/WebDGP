<?php
    //session_start();

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
	
	
	if(!editarAlojamiento($cif,$nombre,$ciudad,$direccion,$descripcion,$oferta)){
		die('Could not insert: ' . mysql_error());
	}
	
    mysql_close($con);

	
	header('Location: ../representante.php?opcion=editarAlojamiento');
   			
?>