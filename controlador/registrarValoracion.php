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
	
    $voto=$_POST["voto"];
    $comentario=$_POST["comentario"];
	
	
	if(!registrarValoracion($cif,$voto,$comentario,$_SESSION['Usuario'])){
		die('Could not insert: ' . mysql_error());
	}
	
	include "vista/vistaUsuarioRepresentante.php";

    mysql_close($con);

	
	header('Location: ../index.php');
   			
?>