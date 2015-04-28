<section class="modificar">
    <div id="modificar">
        <form action="controlador/modificarUsuario.php" id="formulario" name="formulario" method="post" onsubmit="return compara()">
            <table class="modificar" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Modificación de usuario</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Usuario:</label></td><td><input type="textbox" name="usuario" readonly value="<?php echo $fila['Usuario'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Contraseña:</label></td><td><input type="password" name="contrasenia"  />
                        <input type="hidden" name="contraseniaAnterior" value="<?php echo $fila['Contrasenia'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Confirmar Contraseña:</label></td><td><input type="password" name="contrasenia2" >
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Nombre:</label></td><td><input type="textbox" name="nombre" required  value="<?php echo $fila['Nombre'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Apellidos:</label></td><td><input type="textbox" name="apellidos" required value="<?php echo $fila['Apellidos'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Direccion:</label></td><td><input type="textbox" name="direccion" value="<?php echo $fila['Direccion'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Telefono:</label></td><td><input type="textbox" name="telefono" required value="<?php echo $fila['Telefono'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>email:</label></td><td><input type="textbox" name="email" value="<?php echo $fila['email'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"class="tablaVolver"><a href="index.php" class="volver">Volver</a></td>
                </tr>
                <tr>
                    <td class="tablaBoton"><button class="btn" type="button" onclick="history.back()">Atras</button></td>
                    <td class="tablaBoton"><button class="btn" type="submit">Modificar</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>
