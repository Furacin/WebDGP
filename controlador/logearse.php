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
    $contrasenia=$_POST["contrasenia"];

	
	$result = consultarLoginContraseña($usuario,$contrasenia);
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    $count=mysql_num_rows($result);
    if($count==1){
        echo "Usuario encontrado";
        $fila=mysql_fetch_array($result);
    
        $_SESSION['Usuario']=$fila['Usuario'];
        $_SESSION['Nombre']=$fila['Nombre'];
        $_SESSION['Apellidos']=$fila['Apellidos'];
        $_SESSION['email']=$fila['email'];
        $_SESSION['Tipo']=$fila['Tipo'];
        header('Location: ../index.php');
    }else{
        $_SESSION['string']="Usuario o contraseña incorrecta";
        header('Location: ../index.php?opcion=login');
    }
    
    
	
    mysql_close($con);

    
   			
?>