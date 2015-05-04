<div class="consultaUsuario">
    <div class="right">
        <FORM action="basico.php?opcion=crearValoracion" method="post">
                <LABEL for="nombre">Buscar: </LABEL>
        <INPUT type="text" id="buscar" name="buscar">
        <select name="atributo">
            <option>CIF</option>
            <option>Nombre</option>
            <option>Ciudad</option>
            <option>Oferta</option>
        </select>
        <INPUT type="submit" class="boton" value="Buscar"> <INPUT type="reset" class="boton" value="Limpiar">
        </FORM>
    </div>
    <div class="table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Tipo</th>
        </tr>
        <?php
			while($fila=mysql_fetch_array($result)){
			echo "<tr>
				<td align='center'>
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Usuario'] ."</a>
				</td>
				<td>
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Nombre'] ."</a>
				</td>
				<td>
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Apellidos']. "</a>
				</td>
				<td>
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Direccion']. "</a>
				</td>
				<td>	
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Telefono']."</a>
				</td>
                <td>	
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['email']."</a>
				</td>
                <td>	
					<a href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."'>". $fila['Tipo']."</a>
				</td>
				<td>
					<a class=\"ico edit\" href='admin.php?opcion=editarUsuario&usuario=".$fila['Usuario']."' title='".$fila['Nombre']."'>Editar</a> | <a class=\"del ico\" href='admin.php?opcion=eliminarUsuario&usuario=".$fila['Usuario']."' title='".$fila['Nombre']."'>Eliminar</a>
				</td>
			</tr>";
			}
 			?>
        </table>
    </div>
</div>