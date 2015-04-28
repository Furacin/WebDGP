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
	
    $usuario=$_POST["usuario"];
    if($_POST["contrasenia"]==""){
        $contrasenia=$_POST["contraseniaAnterior"];
    }else{
        $contrasenia=$_POST["contrasenia"];
    }
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$direc=$_POST["direccion"];
	$tlf=$_POST["telefono"];
	$email=$_POST["email"];
    $tipo=$_POST["tipo"];
	
	
	if(!editarUsuarioAdmin($usuario,$contrasenia,$nombre,$apellidos,$direc,$tlf,$email,$tipo)){
		die('Could not insert: ' . mysql_error());
	}
	
    mysql_close($con);

	
	header('Location: ../admin.php?opcion=consultarUsuarios');
   			
?>