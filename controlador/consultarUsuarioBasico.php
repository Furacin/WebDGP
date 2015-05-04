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
  
    

  if($_SESSION['Usuario']=="")
        $result = consultarUsuarios();
    else
     $result = consultarUsuario($_SESSION['Usuario']);
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    include "vista/vistaConsultarUsuarioRepresentante.php";    
  
    mysql_close($con);


?>