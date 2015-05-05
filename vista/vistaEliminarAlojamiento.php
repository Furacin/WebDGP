<div class="eliminarUsuario">

        <FORM action="controlador/eliminarAlojamiento.php" method="post">
            <input type="hidden" readonly name="cif" value="<?php echo $_GET['cif'] ?>" >
            <label>¿Estas seguro que deseas eliminar este alojamiento?</label>
            <input type="submit" class="boton" value="Si"> <input type="button" class="boton" onclick="history.back()" value="No">
        </FORM>
    </div>
    </div>
</div>