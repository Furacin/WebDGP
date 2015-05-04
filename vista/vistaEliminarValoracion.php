<div class="eliminarUsuario">

        <FORM action="controlador/eliminarValoracion.php" method="post">
            <input type="hidden" readonly name="id" value="<?php echo $_GET['id'] ?>" >
            <label>¿Estas seguro que deseas eliminar esta valoración?</label>
            <input type="submit" class="boton" value="Si"> <input type="button" class="boton" onclick="history.back()" value="No">
        </FORM>
    </div>
    </div>
</div>