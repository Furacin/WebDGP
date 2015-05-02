<div class="consultaUsuario">
    <!-- <div class="right">
        <FORM action="admin.php?opcion=consultarUsuario" method="post">
                <LABEL for="nombre">Buscar: </LABEL>
        <INPUT type="text" id="buscar" name="buscar">
        <select name="atributo">
            <option>Usuario</option>
            <option>Nombre</option>
            <option>Apellidos</option>
            <option>Telefono</option>
            <option>email</option>
        </select>
        <INPUT type="submit" class="boton" value="Buscar"> <INPUT type="reset" class="boton" value="Limpiar">
        </FORM>
    </div> -->
    <div class="table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>CIF</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Descripción</th>
            <th>Oferta</th>
            <th>Usuario del alojamiento</th>
        </tr>
        <?php
        while($fila=mysql_fetch_array($result)){
        echo "<tr>
          <td align='center'>
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[0]."'>". $fila['CIF'] ."</a>
          </td>
          <td>
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[1]."'>". $fila['nombre'] ."</a>
          </td>
          <td>
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[2]."'>". $fila['ciudad']. "</a>
          </td>
          <td>
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[3]."'>". $fila['direccion']. "</a>
          </td>
          <td>  
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[4]."'>". $fila['descripcion']."</a>
          </td>
                  <td>  
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[5]."'>". $fila['oferta']."</a>
          </td>
          <td>  
            <a href='representante.php?opcion=editarAlojamiento&usuario=".$fila[6]."'>". $fila['usuario_alojamiento']."</a>
          </td>
          <td>
            <a class=\"ico edit\" href='representante.php?opcion=editarAlojamiento&usuario=".$fila[0]."' title='".$fila['nombre']."'>Editar</a> | <a class=\"del ico\" href='representante.php?opcion=eliminarAlojamiento&usuario=".$fila[0]."' title='".$fila['nombre']."'>Eliminar</a>
          </td>
        </tr>";
        }
      ?>  
        </table>
    </div>
</div>