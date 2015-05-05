<?php
session_start();

if((!isset($_SESSION['Usuario'])) or ($_SESSION['Tipo']!="representante")){
    header('Location: index.php');
}else{

?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <title>Administracion</title>
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
        <script type="text/javascript"> 
            function compara() { 
                if (document.formulario.contrasenia.value != document.formulario.contrasenia2.value) {
                    alert('Las contraseña no son identicas, por favor reintente.');
                    return false;
                }else{
                    return true;
                }
            }
        </script>
    </head>
    <body>
    <?php
        if(!isset($_GET['opcion'])){
            echo "<section class='hero2'>";
            include "vista/vistaCabeceraRepresentante.php";
            echo "</section><!--  end hero section  -->";
            include "vista/vistaFooter.php";
        }else{
            echo "<section class='hero2'>";
            switch ($_GET['opcion']){
                case "Usuarios":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaUsuarioRepresentante.php";
                break;
                case "consultarUsuario":
                    include "vista/vistaCabeceraRepresentante.php"; 
                    include "controlador/consultarUsuarioRepresentante.php"; 
                break;
                case "editarUsuario":
                    include "vista/vistaCabeceraRepresentante.php"; 
                    include "controlador/editarUsuario.php"; 
                break;
                case "notificacionAdmin":
                    include "vista/vistaCabeceraRepresentante.php"; 
                break;              
                case "Reservas":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaReservasRepresentante.php";
                break;
                case "Alojamientos":
                    //echo "<section class='hero2'>";
                    include "vista/vistaCabeceraRepresentante.php";  
                    include "vista/vistaAlojamientoRepresentante.php";
                    //include "vista/vistaRegistrarAlojamiento.php";
                    //echo "</section><!--  end hero section  -->";   
                break;
                case "altaAlojamiento":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaRegistrarAlojamiento.php";
                break;
                case "eliminarAlojamiento":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaEliminarAlojamiento.php";
                break;
                case "consultarAlojamientos":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "controlador/consultarAlojamientos.php"; 
                break;
                case "consultarAlojamientosDisponibilidades":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "controlador/consultarAlojamientosReservasDisponibilidades.php";
                break;
                case "editarAlojamiento":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaModificacionAlojamientos.php"; 
                break;
                case "consultarReservas":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "controlador/consultarAlojamientosReservas.php"; 
                break;
                case "consultarReservasAlojamiento":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "controlador/consultarReservasAlojamiento.php"; 
                break;
                case "crearDisponibilidad":
                    include "vista/vistaCabeceraRepresentante.php";
                    include "vista/vistaRegistrarDisponibilidad.php";
                break;
                default:                   
                    include "vista/vistaCabeceraRepresentante.php";
                break;
            }
            echo "</section><!--  end hero section  -->";
            echo "<br class='clearfloat' />";
            include "vista/vistaFooter.php";
        }
    ?> 
    </body>
    </html>
<?php
}
?>