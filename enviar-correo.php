<?php

    $nombre = $_POST['nombre'];
    
    $asunto = "Correo Contacto - FITLIFE";
    $email = 'contacto@ocuello.corsajetec.com';
    $msg = $_POST['mensaje'];


    $header = "From: noreply@example.com" . "\r\n";
    $header .= "Reply-to: noreply@example.com" . "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();

    $mail = mail($email, $asunto, $msg, $header);

    if ($mail){
        echo "<script>
            alert ('El pago se ha realizado satisfactoriamente');
            location.href='../gym2';
        </script>";
    }
    else {
        echo "error";
    }

?>