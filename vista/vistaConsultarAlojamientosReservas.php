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
            ". $fila['CIF'] ."
          </td>
          <td>
            ". $fila['nombre'] ."
          </td>
          <td>
            ". $fila['ciudad']. "
          </td>
          <td>
            ". $fila['direccion']. "
          </td>
          <td>  
            ". $fila['descripcion']."
          </td>
          <td>  
            ". $fila['oferta']."
          </td>
          <td>  
            ". $fila['usuario_alojamiento']."
          </td>
          <td>
            <a class=\"ico edit\" href='representante.php?opcion=consultarReservasAlojamiento&cif=".$fila['CIF']."' title='".$fila['nombre']."'>Consultar Reservas</a> 
          </td>
        </tr>";
        }

      ?>  
        </table>
    </div>
</div>