<section class="buscar">       
    <div id="buscador">
        <form >
            <table class="buscador">
                <tr>
                    <th class="tablaCabecera" colspan="2">Buscador de Reservas</th>
                </tr>
                <tr>
                    <td class="tablaInput">
                        <label>Desde:</label><input type="date" name="desde">
                    </td>
                    <td class="tablaInput">
                        <label>hasta:</label><input type="date" name="hasta">
                    </td>
                </tr>
                <tr>
                    <td class="tablaSelectHabitaciones" colspan="2"><label>Número de habitaciones:</label>
                        <select class="selectHabitaciones" name="numHabitaciones">
                            <option value="1">1 Habitación</option>
                            <option value="2">2 Habitaciones</option>
                            <option value="3">3 Habitaciones</option>
                            <option value="4">4 Habitaciones</option>
                            <option value="5">5 Habitaciones</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tablaSelectAdulto"><label>Adultos:</label>
                        <select class="selectAdultos" name="numAdultos">
                            <option value="1">1 Adulto</option>
                            <option value="2">2 Adultos</option>
                            <option value="3">3 Adultos</option>
                            <option value="4">4 Adultos</option>
                            <option value="5">5 Adultos</option>
                            <option value="6">6 Adultos</option>
                            <option value="7">7 Adultos</option>
                            <option value="8">8 Adultos</option>
                        </select>
                    </td>
                    <td class="tablaSelectNinios"><label>Niños:</label>
                        <select class="selectNinios" name="numNinios">
                            <option value="0">0 Niños</option>
                            <option value="1">1 Niño</option>
                            <option value="2">2 Niños</option>
                            <option value="3">3 Niños</option>
                            <option value="4">4 Niños</option>
                            <option value="5">5 Niños</option>
                            <option value="6">6 Niños</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td colspan="2" class="tablaBoton"><button class="btn" type="submit">Buscar</button></td>
                </tr>
            </table>
        </form>
    </div>
</section>