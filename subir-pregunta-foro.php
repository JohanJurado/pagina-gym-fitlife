<?php

    include ('conectar.php');

    $pregunta=$_POST['usuario'];
    $estado="sin responder";

	$sql_insertar="INSERT INTO foro (`id_foro`, `pregunta_usuario`, `respuesta_admin2`, `estado`) VALUES (NULL,'$pregunta','','$estado')";
    $guardardatos= mysqli_query($mysql,$sql_insertar);


    if ($guardardatos){
        echo "
        <script>
            alert('La pregunta ha sido publicada exitosamente');
    	    location.href='index.php';
        </script>
        ";
    }
else {
  echo "no se guardaron los datos";
}

?>