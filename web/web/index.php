<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Congreso ETSIIT</title>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    
    
    <script src="js/dropdown.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/formulario.js"></script>
    <script src="js/ponencias.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/gmaps.js"></script>
    
</head>
    

    
<body>
    
<!-- header -->
<?php
    include 'header.php';
?>

    


    
<!-- container -->
<div class="container">
    
    <div class="wrapper">
        
        <?php
            if (!isset($_GET['secc']))
            {
                include "slider.php";
                echo '<div class="content">';
                    include "presentacion.php";
                echo '</div>';            
                echo '<div class="sidebar">';
                    include "sidebar.php";
                echo '</div>';
            }
            else
            {
                if ($_GET['secc'] != "programa")
                    echo '<div class="content">';

                switch ($_GET['secc']){
                    case "presentacion":
                        include "presentacion.php";
                    break;
                    case "programa":
                        include "programa.php";
                    break;
                    case "inscripcion":
                        include "inscripcion.php";         
                    break;
                    case "comollegar":
                        include "comollegar.php";         
                    break;
                    case "patrocinadores":
                        include "patrocinadores.php";         
                    break;
                    case "contacto":
                        include "contacto.php";         
                    break;
                    case "actividades":
                        include "actividades.php";         
                    break;
                    default:
                        include "presentacion.php";
                    break;
                }

                if ($_GET['secc'] != "programa")
                    echo '</div>';
                
                if ($_GET['secc'] != "programa")
                {
                    echo '<div class="sidebar">';
                        include "sidebar.php";
                    echo '</div>';
                }
            }
        ?>


    </div>
</div>


<!-- footer -->
<?php
    include 'footer.php';
?>


</body>
</html>
