<header>
    <div class="wrapper">
        <a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
        <a href="#" class="hamburger"></a>
        <nav>
            <ul>
                <li><a href="basico.php?opcion=Usuarios">Usuario</a></li>
                <li><a href="basico.php?opcion=valoraciones">Valoración</a></li>
                <li><a href="basico.php?opcion=reservas">Reservas</a></li>
            </ul>
            <?php 
                echo "<p class='usuario'>Bienvenido, " .$_SESSION['Nombre']. " <a href='controlador/cerrarSesion.php'>Cerrar Sesion</p>";               
            ?>  
        </nav>
        <?php
            if(isset($_SESSION['Usuario']) and ($_SESSION['Tipo']=="basico")) 
                echo "<a href='index.php' class='loginAdmin'>Vista Web</a>";
        ?>
    </div>
</header><!--  end header section  -->
