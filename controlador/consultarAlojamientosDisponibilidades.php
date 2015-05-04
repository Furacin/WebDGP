<?php


    include("modelo/modelo.php");
	$con = conectar();
	if (!$con) {
     die('Could not connect: ' . mysql_error());
    }
	
	$db=selectDB();
    if (!$db) {
     die('Could not select database: ' . mysql_error());
    }
	
    
  $cif=$_GET["cif"];
	
	$result = consultarAlojamientoDisponibilidades($cif);
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    include "vista/vistaConsultarAlojamientosDisponibilidades.php";    
	
    mysql_close($con);


?>