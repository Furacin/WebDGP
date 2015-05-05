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

    $cif=$_POST['cif'];
	
	if(!eliminarAlojamiento($cif)){
		die('Could not query:' . mysql_error());
	}
	
	
	header('Location: ../representante.php?opcion=Alojamientos');
			

   mysql_close($con);			
?>