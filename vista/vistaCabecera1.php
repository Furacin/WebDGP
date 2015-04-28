<header>
    <div class="wrapper">
        <a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
        <a href="#" class="hamburger"></a>
        <nav>
            <ul>
                <li><a href="#">Apartamentos</a></li>
                <li><a href="#">Hoteles</a></li>
                <li><a href="#">Casas Rurales</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <?php 
                if((!isset($_SESSION['Usuario']))){
                    echo "<a href='index.php?opcion=login' class='login_btn'>Login</a>";
                }else{
                    echo "<p class='usuario'>Bienvenido, <a href='index.php?opcion=modificarUsuario'>" . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . "</a></p><a href='controlador/cerrarSesion.php' class='cerrarSesion_btn'>Cerrar Sesion</a></p>";
                }
            ?>
        </nav>
        <?php 
            if(isset($_SESSION['Usuario'])) {
                if ($_SESSION['Tipo']=="Administrador")
                    echo "<a href='admin.php' class='loginAdmin'>Vista Administrador</a>";
                else
                    if ($_SESSION['Tipo']=="representante")
                        echo "<a href='representante.php' class='loginAdmin'>Vista Representante</a>";
            }
        ?>
    </div>
    <section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Apartamentos - Hoteles - Casas Rurales</h3>
    </section>
</header><!--  end header section  -->
