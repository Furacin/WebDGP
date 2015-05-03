<section class="modificar">
    <div id="modificar">
        <form action="controlador/modificarAlojamiento.php" id="formulario" name="formulario" method="post" >
            <table class="modificar" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Modificación de Alojamiento</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>CIF:</label></td><td><input type="textbox" name="cif" required value="<?php echo $_SESSION['Usuario'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Nombre:</label></td><td><input type="textbox" name="nombre" required  />
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Ciudad:</label></td><td><input type="textbox" name="ciudad" required  />
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Dirección:</label></td><td><input type="textbox" name="direccion" required  />
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Descripción:</label></td><td><input type="textbox" name="descripcion" required  />
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Oferta:</label></td><td><input type="textbox" name="oferta" required  />
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
