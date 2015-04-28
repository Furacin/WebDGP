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
	
    $usuario=$_GET['usuario'];	
	    
    include "vista/vistaEliminarUsuario.php";    
	
    mysql_close($con);


?>