<?php

function conectar(){
	$con=mysql_connect("localhost","administrador","1234")or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	return $con;
}

function selectDB(){
	return (mysql_select_db('DGP'));
}

function insertarUsuario($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email,$tipo){
       return (mysql_query("INSERT INTO `dgp`.`usuarios` (`Usuario`, `Contrasenia`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `email`, `tipo`) VALUES ('".$usuario."','".$contrasenia."','".$nombre."','".$apellidos."','".$direccion."','".$telefono."','".$email."','".$tipo."')"));
}

function registrarUsuario($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email,$tipo){
       return (mysql_query("INSERT INTO `dgp`.`usuarios` (`Usuario`, `Contrasenia`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `email`, `tipo`) VALUES ('".$usuario."','".$contrasenia."','".$nombre."','".$apellidos."','".$direccion."','".$telefono."','".$email."','".$tipo."')"));
}

function consultarUsuarios(){
    return (mysql_query("SELECT * FROM dgp.usuarios"));
}

function consultarUsuario($usuario){
    return (mysql_query("SELECT * FROM dgp.usuarios WHERE usuario='". $usuario ."'"));
}

function consultarUsuarioAtributo($valor,$atributo){
    return (mysql_query("SELECT * FROM dgp.usuarios WHERE ".$atributo."='". $valor ."'"));
}

function consultarLoginContraseña($usuario,$contrasenia){
    return (mysql_query("SELECT * FROM dgp.usuarios WHERE usuario='".$usuario."' AND contrasenia='".$contrasenia."'"));
}

function editarUsuarioAdmin($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email,$tipo){
	return (mysql_query("UPDATE usuarios SET Tipo='".$tipo."', Contrasenia='".$contrasenia."',Nombre='".$nombre."',Apellidos='".$apellidos."',Direccion='".$direccion."',email='".$email."',Telefono='".$telefono."' WHERE Usuario='".$usuario."'"));
}

function editarUsuario($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email){
	return (mysql_query("UPDATE usuarios SET Contrasenia='".$contrasenia."',Nombre='".$nombre."',Apellidos='".$apellidos."',Direccion='".$direccion."',email='".$email."',Telefono='".$telefono."' WHERE Usuario='".$usuario."'"));
}

function eliminarUsuario($usuario){
	return (mysql_query("DELETE FROM usuarios WHERE Usuario='".$usuario."'"));
}

?>