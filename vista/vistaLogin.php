<section class="login">
    <div id="login">
        <form action="controlador/logearse.php" method="post">
            <table class="login">
                <tr>
                    <th class="tablaCabecera" colspan="2">Iniciar Sesión</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Usuario:</label></td><td><input type="textbox" name="usuario">
                    </td>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Contraseña:</label></td><td><input type="password" name="contrasenia">
                    </td>
                </tr>
                <tr>
                    <td class="tablaReg"><a href="index.php?opcion=registrar" class="registro">Registrarse</a></td><td class="tablaVolver"><a href="index.php" class="volver">Volver</a></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label>
                            <?php 
                                if(isset($_SESSION['string'])) 
                                    echo $_SESSION['string'];
                                    $_SESSION['string']="";
                            ?>
                        </label>
                    </td>
                </tr>
                <tr>
                <td colspan="2" class="tablaBoton"><button class="btn" type="submit">Acceder</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>