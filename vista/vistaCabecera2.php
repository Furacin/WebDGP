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
                    echo "<p class='usuario'>Bienvenido, <a href='index.php?opcion=modificarUsuario'>" . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . "</a></p><a href='controlador/cerrarSesion.php' class='cerrarSesion_btn2'>Cerrar Sesion</a></p>";
                }
            ?>
        </nav>
    </div>
</header><!--  end header section  -->
