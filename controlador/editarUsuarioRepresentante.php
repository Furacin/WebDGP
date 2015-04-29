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
	
    

	$usuario=$_SESSION['Usuario'];
	$result = consultarUsuario($usuario);
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }

    $fila=mysql_fetch_array($result);
    
    include "vista/vistaEditarUsuario.php";    
	
    mysql_close($con);


?>