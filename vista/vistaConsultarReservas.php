<div class="consultarReservas">
    
    <div class="table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>id_reserva</th>
            <th>informacion</th>
            <th>num_personas</th>
            <th>usuario</th>
            <th>alojamiento_reserva</th>
            <th>id_disponibilidad</th>
        </tr>
        <?php
            while($fila=mysql_fetch_array($result)){
            echo "<tr>
              <td align='center'>
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[0]."'>". $fila['id_reserva'] ."</a>
              </td>
              <td>
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[1]."'>". $fila['informacion'] ."</a>
              </td>
              <td>
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[2]."'>". $fila['num_personas']. "</a>
              </td>
              <td>
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[3]."'>". $fila['usuario']. "</a>
              </td>
              <td>  
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[4]."'>". $fila['alojamiento_reserva']."</a>
              </td>
                      <td>  
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[5]."'>". $fila['id_disponibilidad']."</a>
              </td>
              <td>  
                <a href='representante.php?opcion=consultarReservas&usuario=".$fila[6]."'>". $fila['usuario_alojamiento']."</a>
              </td>
              <td>
                <a class=\"ico edit\" href='representante.php?opcion=consultarReservas&usuario=".$fila[0]."' title='".$fila['nombre']."'>Editar</a> | <a class=\"del ico\" href='representante.php?opcion=eliminarAlojamiento&usuario=".$fila[0]."' title='".$fila['nombre']."'>Eliminar</a>
              </td>-->
            </tr>";
            }
            ?>
        </table>
    </div>
</div>