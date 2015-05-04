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
    $precio=$_POST["precio"];
	
	
	if(!registrarDisponibilidad($cif,$precio)){
		die('Could not insert: ' . mysql_error());
	}
	
	include "vista/vistaUsuarioRepresentante.php";

    mysql_close($con);

	
	header('Location: ../representante.php?opcion=Alojamientos');
   			
?>