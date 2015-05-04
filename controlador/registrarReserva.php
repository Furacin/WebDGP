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
    $personas=$_POST["numero_personas"];
	$id_disponibilidad=$_POST["id_disponibilidad"];
	
	if(!registrarReserva($cif,$personas,$id_disponibilidad,$_SESSION['Usuario'])){
		die('Could not insert: ' . mysql_error());
	}
	
	include "vista/vistaUsuarioRepresentante.php";

    mysql_close($con);

	
	header('Location: ../index.php');
   			
?>