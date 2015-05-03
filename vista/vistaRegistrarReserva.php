<section class="caption">
    <h2 class="caption">Reservas en Granada</h2>
    <h3 class="properties">Registro</h3>
</section>

<section class="registro">
    <div id="registro">
        <form action="controlador/registrarReserva.php" method="post">
            <table class="registro" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Registro de Reserva</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Informacion:</label></td><td><input type="textbox" name="informacion" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Numero de personas:</label></td><td><input type="textbox" name="num_personas" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Usuario:</label></td><td><input type="textbox" name="usuario" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Alojamiento reserva:</label></td><td><input type="textbox" name="alojamiento_reserva" required>
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>ID disponibilidad:</label></td><td><input type="textbox" name="id_disponibilidad" required>
                    </td>
                </tr>
                    <td colspan="2"class="tablaVolver"><a href="index.php" class="volver">Volver</a></td>
                </tr>
                <tr>
                    <td class="tablaBoton"><button class="btn" type="reset">Limpiar</button></td>
                    <td class="tablaBoton"><button class="btn" type="submit">Reservar</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>
