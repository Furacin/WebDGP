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
	
    $informacion=$_POST["informacion"];
    $num_personas=$_POST["num_personas"];
	$usuario=$_POST["usuario"];
	$alojamiento_reserva=$_POST["alojamiento_reserva"];
	$id_disponibilidad=$_POST["id_disponibilidad"];
	
	
	if(!editarReserva($informacion,$num_personas,$usuario,$alojamiento,$id_disponibilidad)){
		die('Could not insert: ' . mysql_error());
	}
	
	include "vista/vistaReservasRepresentante.php";

    mysql_close($con);

	
	header('Location: ../index.php');
   			
?>