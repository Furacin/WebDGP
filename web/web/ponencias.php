<div id="cerrar"> 
    <p  onclick="cerrar()">X</p>
</div>

<?php

    $bloques = array("ING. SOFTWARE", "INFORMÁTICA GRÁFICA", "BASES DE DATOS", "COMPILADORES", "SISTEMAS OPERATIVOS",
               "SISTEMAS COMPLEJOS", "INTERFACES DE USUARIO");


    if (isset($_GET['ponencia']))
    {
        $pon = $_GET['ponencia'];

        $file = fopen("ponencias/" . $pon . ".txt", "r");
        
        if((!feof($file)))
        {
            $linea = fgets($file);

            $title = explode(",", $linea);

            echo "<h3 class=\"h3ponencia\"><span>".$title[0]."</span>,".$title[1]."</h3>";
            echo "<div id=\"texto-ponencia\">";

            while(!feof($file)) {
                echo "<p>".fgets($file)."</p>";
            }
            echo "</div>";
        }

        fclose($file);
        
        include "contextmenu.php";
    }   
    
?>
