<div class="consultaUsuario">
    
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
            </tr>";
            }
            ?>
        </table>
    </div>
</div>