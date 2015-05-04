<section class="modificar">
    <div id="modificar">
        <form action="controlador/modificarValoracion.php" id="formulario" name="formulario" method="post" onsubmit="return compara()">
            <table class="modificar" >
                <tr>
                    <th class="tablaCabecera" colspan="2">Modificación de Valoración</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>ID:</label></td><td><input type="textbox" name="id" readonly value="<?php echo $_GET['id'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Voto:</label></td><td><input type="textbox" name="voto">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Comentario:</label></td><td><input type="textbox" name="comentario">
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
