<section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Reserva de hoteles</h3>
</section>

<section class="registro">
    <div id="registro">
        <form action="controlador/registrarValoracion.php" method="post">
            <table class="registro" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Nueva Reserva</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>CIF:</label></td><td><input type="textbox" name="cif">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Voto (1-10):</label></td><td><input type="textbox" name="voto">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Comentario:</label></td><td><input type="textbox" name="comentario">
                    </td>
                </tr>
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
