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

function editarAlojamiento($usuario,$contrasenia,$nombre,$apellidos,$direccion,$telefono,$email){
  return (mysql_query("UPDATE usuarios SET Contrasenia='".$contrasenia."',Nombre='".$nombre."',Apellidos='".$apellidos."',Direccion='".$direccion."',email='".$email."',Telefono='".$telefono."' WHERE Usuario='".$usuario."'"));
}

function eliminarUsuario($usuario){
	return (mysql_query("DELETE FROM usuarios WHERE Usuario='".$usuario."'"));
}

function registrarAlojamiento($cif,$nombre,$ciudad,$direccion,$descripcion,$oferta,$usuario){
       return (mysql_query("INSERT INTO `dgp`.`alojamientos` (`CIF`, `nombre`, `ciudad`, `direccion`, `descripcion`, `oferta`,`usuario_alojamiento`) VALUES ('".$cif."','".$nombre."','".$ciudad."','".$direccion."','".$descripcion."','".$oferta."','".$usuario."')"));
}
///////////
function insertarReserva($informacion,$num_personas,$usuario,$alojamiento_reserva,$id_disponibilidad){
       return (mysql_query("INSERT INTO `dgp`.`reservas` (`informacion`, `num_personas`, `alojamiento_reserva`, `id_disponibilidad`) VALUES ('".$informacion."','".$num_personas."','".$alojamiento_reserva."','".$id_disponibilidad."'"));
}

function editarReserva($informacion,$num_personas,$usuario,$alojamiento_reserva,$id_disponibilidad){
  return (mysql_query("UPDATE usuarios SET informacion='".$informacion."',num_personas='".$num_personas."',usuario='".$usuario."',alojamiento_reserva='".$alojamiento_reserva."',id_disponibilidad='".$id_disponibilidad."'"));
}

function consultarReservas($usuario){
    return (mysql_query("SELECT * FROM dgp.reservas WHERE usuario='". $usuario ."'"));
}

/*function eliminarReserva($usuario,$alojamiento_reserva){
  return (mysql_query("DELETE FROM dgp.reservas WHERE Usuario='".$usuario."',alojamiento_reserva='"$alojamiento_reserva"'"));
}*/

?>