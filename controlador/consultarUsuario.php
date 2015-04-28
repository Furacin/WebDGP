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
	
    

	if($_POST['buscar']=="")
        $result = consultarUsuarios();
    else
	   $result = consultarUsuarioAtributo($_POST['buscar'],$_POST['atributo']);
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    include "vista/vistaConsultarUsuarios.php";    
	
    mysql_close($con);


?>