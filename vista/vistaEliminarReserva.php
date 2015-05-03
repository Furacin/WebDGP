<div class="eliminarReserva">

        <FORM action="controlador/eliminarReserva.php" method="post">
            <input type="hidden" readonly name="alojamiento_reserva" value="<?php echo $_GET['alojamiento_reserva'] ?>" >
            <label>¿Estas seguro que deseas eliminar esta reserva?</label>
            <input type="submit" class="boton" value="Si"> <input type="button" class="boton" onclick="history.back()" value="No">
        </FORM>
    </div>
    </div>
</div>