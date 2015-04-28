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

	
	if(!eliminarUsuario($_POST['usuario'])){
		die('Could not query:' . mysql_error());
	}
	
	
	header('Location: ../admin.php?opcion=consultarUsuarios');
			

   mysql_close($con);			
?>