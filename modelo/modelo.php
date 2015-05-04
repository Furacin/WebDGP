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

function consultarAlojamientos($usuario){
    return (mysql_query("SELECT * FROM dgp.alojamientos WHERE usuario_alojamiento='". $usuario ."'"));
}

function consultarAlojamientosValoracion(){
    return (mysql_query("SELECT * FROM dgp.alojamientos"));
}

function consultarUsuarioAtributo($valor,$atributo){
    return (mysql_query("SELECT * FROM dgp.usuarios WHERE ".$atributo."='". $valor ."'"));
}

function consultarLoginContraseña($usuario,$contrasenia){
    return (mysql_query("SELECT * FROM dgp.usuarios WHERE usuario='".$usuario."' AND contrasenia='".$contrasenia."'"));
}

function consultarValoraciones($usuario){
    return (mysql_query("SELECT * FROM dgp.valoraciones WHERE usuario='".$usuario."'"));
}

function editarUsuarioAdmin($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email,$tipo){
	return (mysql_query("UPDATE usuarios SET Tipo='".$tipo."', Contrasenia='".$contrasenia."',Nombre='".$nombre."',Apellidos='".$apellidos."',Direccion='".$direccion."',email='".$email."',Telefono='".$telefono."' WHERE Usuario='".$usuario."'"));
}

function editarUsuario($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email){
	return (mysql_query("UPDATE usuarios SET Contrasenia='".$contrasenia."',Nombre='".$nombre."',Apellidos='".$apellidos."',Direccion='".$direccion."',email='".$email."',Telefono='".$telefono."' WHERE Usuario='".$usuario."'"));
}

function editarAlojamiento($cif,$nombre,$ciudad,$direccion,$descripcion,$oferta){
  return (mysql_query("UPDATE alojamientos SET nombre='".$nombre."',ciudad='".$ciudad."',direccion='".$direccion."',descripcion='".$descripcion."',oferta='".$oferta."' WHERE CIF='".$cif."'"));
}

function editarValoracion($id,$voto,$comentario){
  return (mysql_query("UPDATE valoraciones SET voto='".$voto."',comentario='".$comentario."' WHERE id='".$id."'"));
}

function eliminarUsuario($usuario){
	return (mysql_query("DELETE FROM usuarios WHERE Usuario='".$usuario."'"));
}

function eliminarValoracion($id){
  return (mysql_query("DELETE FROM valoraciones WHERE id='".$id."'"));
}

function registrarAlojamiento($cif,$nombre,$ciudad,$direccion,$descripcion,$oferta,$usuario){
       return (mysql_query("INSERT INTO `dgp`.`alojamientos` (`CIF`, `nombre`, `ciudad`, `direccion`, `descripcion`, `oferta`,`usuario_alojamiento`) VALUES ('".$cif."','".$nombre."','".$ciudad."','".$direccion."','".$descripcion."','".$oferta."','".$usuario."')"));
}

function registrarValoracion($cif,$voto,$comentario,$usuario){
       return (mysql_query("INSERT INTO `dgp`.`valoraciones` (`voto`, `comentario`, `usuario`, `alojamiento_valoracion`) VALUES ('".$voto."','".$comentario."','".$usuario."','".$cif."')"));
}

?>