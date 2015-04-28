<section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Registro</h3>
</section>

<section class="registro">
    <div id="registro">
        <form action="controlador/registrarUsuario.php" method="post">
            <table class="registro" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Registro de usuario</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Tipo de usuario:</label>
                           </td><td><input type="radio" name="tipo" value="basico" required>Básico:
                           </td><td><input type="radio" name="tipo" value="representante">Representante de un alojamiento:
                    </td>
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
                        <label>Confirmar Contraseña:</label></td><td><input type="password" name="pass2" required>
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
                    <td colspan="2"class="tablaVolver"><a href="index.php" class="volver">Volver</a></td>
                </tr>
                <tr>
                    <td class="tablaBoton"><button class="btn" type="reset">Limpiar</button></td>
                    <td class="tablaBoton"><button class="btn" type="submit">Registrar</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>
