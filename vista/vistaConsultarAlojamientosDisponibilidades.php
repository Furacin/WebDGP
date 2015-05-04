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
            <th>ID</th>
            <th>CIF-Alojamiento</th>
            <th>Precio</th>
        </tr>
        <?php
        while($fila=mysql_fetch_array($result)){
        echo "<tr>
          <td align='center'>
            ". $fila['id_disponibilidad'] ."
          </td>
          <td>
            ". $fila['alojamiento'] ."
          </td>
          <td>
            ". $fila['precio']. "
          </td> 
          <td>
            <a class=\"ico edit\" href='basico.php?opcion=crearReserva&cif=".$fila['alojamiento']."&precio=". $fila['precio']."&id_disponibilidad=". $fila['id_disponibilidad']."'>Reservar</a> 
          </td>
        </tr>";
        }

      ?>  
        </table>
    </div>
</div>