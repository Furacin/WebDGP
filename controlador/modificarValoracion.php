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
	
	$id=$_POST["id"];
    $voto=$_POST["voto"];
    $comentario=$_POST["comentario"];;
	
	
	if(!editarValoracion($id,$voto,$comentario)){
		die('Could not insert: ' . mysql_error());
	}
	
    mysql_close($con);

	
	header('Location: ../basico.php?opcion=valoraciones');
   			
?>