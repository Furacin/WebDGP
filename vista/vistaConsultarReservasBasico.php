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
            <th>ID de reserva</th>
            <th>Número de personas</th>
            <th>Usuario</th>
            <th>Alojamiento</th>
            <th>ID de la oferta disponible</th>
        </tr>
        <?php
        while($fila=mysql_fetch_array($result)){
        echo "<tr>
          <td align='center'>
            ". $fila['id_reserva'] ."
          </td>
          <td>
            ". $fila['num_personas'] ."
          </td>
          <td>
            ". $fila['usuario']. "
          </td>
          <td>
            ". $fila['alojamiento_reserva']. "
          </td>
          <td>  
            ". $fila['id_disponibilidad']."
          </td>
        </tr>";
        }

      ?>  
        </table>
    </div>
</div>