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
	
    

	
	$result = consultarUsuarios();
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    include "vista/vistaConsultarUsuarios.php";    
	
    mysql_close($con);


?>