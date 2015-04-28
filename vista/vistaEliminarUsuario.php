<div class="eliminarUsuario">

        <FORM action="controlador/eliminarUsuario.php" method="post">
            <input type="hidden" readonly name="usuario" value="<?php echo $_GET['usuario'] ?>" >
            <label>¿Estas seguro que deseas eliminar este Usuario?</label>
            <input type="submit" class="boton" value="Si"> <input type="button" class="boton" onclick="history.back()" value="No">
        </FORM>
    </div>
    </div>
</div>