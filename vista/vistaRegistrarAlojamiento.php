<section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Registro</h3>
</section>

<section class="registro">
    <div id="registro">
        <form action="controlador/registrarAlojamiento.php" method="post">
            <table class="registro" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Registro de Alojamiento</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>CIF:</label></td><td><input type="textbox" name="cif" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Nombre:</label></td><td><input type="textbox" name="nombre" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Ciudad:</label></td><td><input type="textbox" name="ciudad" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Dirección:</label></td><td><input type="textbox" name="direccion" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Descripción:</label></td><td><input type="textbox" name="descripcion" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Oferta:</label></td><td><input type="textbox" name="oferta">
                    </td>
                </tr>
               <!--  <tr>
                    <td class="tablaInput">
                        <label>Telefono:</label></td><td><input type="textbox" name="telefono" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>email:</label></td><td><input type="textbox" name="email">
                    </td>
                </tr>
                <tr> -->
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
