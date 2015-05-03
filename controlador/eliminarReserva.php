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

	
	if(!eliminarReserva($_POST['usuario'])){
		die('Could not query:' . mysql_error());
	}
	

	include "vista/vistaReservasRepresentante.php";

    mysql_close($con);

	
	header('Location: ../index.php');

	
			
?>