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
                if(!isset($_SESSION['Usuario'])){
                    echo "<a href='index.php?opcion=login' class='login_btn'>Login</a>";
                }else{
                    echo "Bienvenido, " . $_SESSION['Nombre'];
                }
            ?>
        </nav>
    </div>
    <section class="caption">
    <h2 class="caption">Alojamientos en Granada</h2>
    <h3 class="properties">Apartamentos - Hoteles - Casas Rurales</h3>
    </section>
</header><!--  end header section  -->
