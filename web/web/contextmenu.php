<?php
    
        $ponencia = explode("p", $_GET['ponencia']);
        $ponencia = (int) $ponencia[1];
        $sep = explode("b", $pon);
        $bloque = explode("p", $sep[1]);
        $bloque = (int) $bloque[0];
        $sep = explode("d", $pon);
        $dia = explode("b", $sep[1]);
        $dia = (int) $dia[0];
        $nbloque = ($dia-1)*4 + $bloque-1;
        $titulo = $bloques[$nbloque];
    
        echo "<div id=\"context-menu\">";
            echo "<h4>".$titulo."</h4>";
            echo "<ul class=\"menu-ponencias\">";

                for ($i = 1; $i <= 3; $i++) 
                {
                    if($i != $ponencia)
                    {
                        $id = "d".$dia."b".$bloque."p".$i;
                        $file = fopen("ponencias/".$id.".txt", "r");       
                        if((!feof($file)))
                        {
                            $linea = fgets($file);
                            
                            $title = explode(",", $linea);
                            echo "<li><p onclick=\"cargarPonencia('".$id."')\">".$title[0]."</p></li>";
                        }
                        fclose($file);
                    }
                }
        
            echo "</ul>";
        echo "</div>";


?>