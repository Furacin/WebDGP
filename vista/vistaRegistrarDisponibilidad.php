<section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Oferta de Habitacioness</h3>
</section>

<section class="registro">
    <div id="registro">
        <form action="controlador/registrarDisponibilidad.php" method="post">
            <table class="registro" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Nueva Oferta</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>CIF-Alojamiento:</label></td><td><input type="textbox" name="cif" readonly value="<?php echo $_GET['cif'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Precio/Habitación:</label></td><td><input type="textbox" name="precio">
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
