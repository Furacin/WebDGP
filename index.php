<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alojamientos</title>
	<meta charset="utf-8">
	<meta name="author" content="Grupo 3 DGP">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
    <!-- polyfiller file to detect and load polyfills -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    <script>
      webshims.setOptions('waitReady', false);
      webshims.setOptions('forms-ext', {types: 'date'});
      webshims.polyfill('forms forms-ext');
    </script>
    
</head>
<body>
    
<?php
    if(!isset($_GET['opcion']))
    {
        echo "<section class='hero'>";
        include "vista/vistaCabecera1.php";
        include "vista/vistaBuscar.php";
        echo "</section><!--  end hero section  -->";
        include "vista/vistaLista.php";
        include "vista/vistaFooter.php";
    }else{
        switch ($_GET['opcion']){
            case "login":
                echo "<section class='hero'>";
                include "vista/vistaCabecera1.php";
                include "vista/vistaLogin.php";
                echo "</section><!--  end hero section  -->";
                include "vista/vistaFooter.php";
            break;
            case "registrar":
                echo "<section class='hero2'>";
                include "vista/vistaCabecera2.php";      
                include "vista/vistaRegistrarse.php";
                echo "</section><!--  end hero section  -->";
                include "vista/vistaFooter.php";         
            break;
            case "modificarUsuario":
                echo "<section class='hero2'>";
                include "vista/vistaCabecera2.php";      
                include "controlador/editarUsuario.php";
                echo "</section><!--  end hero section  -->";
                include "vista/vistaFooter.php";         
            break;
            default:
                echo "<section class='hero'>";
                include "vista/vistaCabecera1.php";
                include "vista/vistaBuscar.php";
                echo "</section><!--  end hero section  -->";
                include "vista/vistaLista.php";
                include "vista/vistaFooter.php";
            break;
        }
    }
?> 
	
    

	<!--<section class="separador">
        <!--
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->

	<!-- </section> <!--  end search section  --> 

</body>
</html>