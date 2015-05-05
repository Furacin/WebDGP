<h1><img class="logo" src="images/ic_action_paste.png"> Actividades  </h1>

<?php
    
    $directorio = opendir("./actividades/"); //ruta actual
    while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
    {        
        if (!is_dir($archivo))
        {
            echo "<div class='actividad'>";
            $file = fopen("./actividades/".$archivo, "r");
            if((!feof($file)))
            {
                $linea = fgets($file);

                echo "<h3>".$linea."</h3>";

                $linea = fgets($file);                    
                $linea = fgets($file);
                $imagen = explode("->", $linea);
                echo "<img class='double-border' src=\"images/".$imagen[1]."\"/>";
                $linea = fgets($file);

                while(!feof($file)) {
                    echo "<p>".fgets($file)."</p>";
                }
            }
            fclose($file);
            
            echo "</div>";
        }        
    }

?>