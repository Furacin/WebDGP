<section class="insertar">
    <div id="insertar">
        <form action="controlador/insertarUsuario.php" name="formulario" id="formulario" onSubmit="return compara()" method="post">
            <table class="insertar" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Insertar de usuario</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Usuario:</label></td><td><input type="textbox" name="usuario" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Contraseña:</label></td><td><input type="password" name="contrasenia" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Confirmar Contraseña:</label></td><td><input type="password" name="contrasenia2" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Nombre:</label></td><td><input type="textbox" name="nombre" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Apellidos:</label></td><td><input type="textbox" name="apellidos" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Direccion:</label></td><td><input type="textbox" name="direccion">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Telefono:</label></td><td><input type="textbox" name="telefono" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>email:</label></td><td><input type="textbox" name="email">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Tipo:</label>
                    </td>
                    <td>
                        <select name="tipo">
                            <option>Usuario</option>
                            <option>Administrador</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"class="tablaVolver"><a href="index.php" class="volver">Volver</a></td>
                </tr>
                <tr>
                    <td class="tablaBoton"><button class="btn" type="reset">Limpiar</button></td>
                    <td class="tablaBoton"><button class="btn" type="submit">Introducir</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>
