<header>
    <div class="wrapper">
        <a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
        <a href="#" class="hamburger"></a>
        <nav>
            <ul>
                <li><a href="admin.php?opcion=Usuarios">Usuarios</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Alojamientos</a></li>
            </ul>
            <?php 
                echo "<p class='usuario'>Bienvenido Administrador, " .$_SESSION['Nombre']. " <a href='controlador/cerrarSesion.php'>Cerrar Sesion</p>";               
            ?>  
        </nav>
        <?php
            if(isset($_SESSION['Usuario']) and ($_SESSION['Tipo']=="Administrador")) 
                echo "<a href='index.php' class='loginAdmin'>Vista Web</a>";
        ?>
    </div>
</header><!--  end header section  -->
