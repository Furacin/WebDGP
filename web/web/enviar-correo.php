 <?php

    $mensaje = $_GET['asunto'];

    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
    $mensaje = wordwrap($mensaje, 70, "\r\n");

    require_once "./phpmailer/class.phpmailer.php"; //Incluimos la clase phpmailer

    $mail = new PHPMailer(true); // Declaramos un nuevo correo, el parametro true significa que mostrara excepciones y errores.

    $mail->IsSMTP(); // Se especifica a la clase que se utilizará SMTP

    try {
        //------------------------------------------------------
        $correo_emisor="webmastercongresoetsiit@gmail.com";     //Correo a utilizar para autenticarse
        
        $nombre_emisor="I Congreso Etsiit";               //Nombre de quien envía el correo
        $contrasena="congresoetsiit1";          //contraseña de tu cuenta en Gmail
        $correo_destino=$_GET['email'];      //Correo de quien recibe
        $nombre_destino="name";                //Nombre de quien recibe   	
        //--------------------------------------------------------
        
        $mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
        $mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
        $mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
        $mail->Port       = 465;                   // Establece el puerto del servidor SMTP de Gmail
        $mail->Username   = $correo_emisor;  	     // Usuario Gmail
        $mail->Password   = $contrasena;           // Contraseña Gmail
        //A que dirección se puede responder el correo
        $mail->AddReplyTo($correo_emisor, $nombre_emisor);
        //La direccion a donde mandamos el correo
        $mail->AddAddress($correo_destino, $nombre_destino);
        //De parte de quien es el correo
        $mail->SetFrom($correo_emisor, $nombre_emisor);
        //Asunto del correo
        $mail->Subject = '[I Congreso Etsiit] Email de replica';
        //El cuerpo del mensaje, puede ser con etiquetas HTML
        $mail->MsgHTML($mensaje);

        //Enviamos el correo
        $mail->Send();
        echo "Gracias por contactar con nosotros.";
    } catch (phpmailerException $e) {
        echo "Error";
    } catch (Exception $e) {
        echo "Error";
    }

    

?>