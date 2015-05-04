<div class="consultaUsuario">
    <div class="table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>ID</th>
            <th>Voto</th>
            <th>Comentario</th>
            <th>Usuario</th>
            <th>Alojamiento</th>
        </tr>
        <?php
        while($fila=mysql_fetch_array($result)){
        echo "<tr>
          <td align='center'>
            ". $fila['id'] ."
          </td>
          <td>
            ". $fila['voto'] ."
          </td>
          <td>
            ". $fila['comentario']. "
          </td>
          <td>
            ". $fila['usuario']. "
          </td>
          <td>  
            ". $fila['alojamiento_valoracion']."
          </td>
          <td>
            <a class=\"ico edit\" href='basico.php?opcion=modificaValoracion&id=".$fila['id']." ' title='".$fila['id']."'>Editar</a> | <a class=\"del ico\" href='basico.php?opcion=eliminarValoracion&id=".$fila['id']."' title='".$fila['id']."'>Eliminar</a>
        </td>
        </tr>";
        }

      ?>  
        </table>
    </div>
</div>