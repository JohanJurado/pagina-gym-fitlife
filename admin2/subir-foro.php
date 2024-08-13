<?php

    include ('conectar.php');

	$id=$_GET['msg'];
    $respuesta=$_POST['usuario'];
    $estado="respondido";

    $sql_insertar="UPDATE foro SET respuesta_admin2='$respuesta', estado='$estado' WHERE id_foro=$id";
    $guardardatos= mysqli_query($mysql,$sql_insertar);


    if ($guardardatos){
        echo "
        <script>
            alert('La rta ha sido publicada exitosamente');
    	    location.href='index.php';
        </script>
        ";
    }
else {
  echo "no se guardaron los datos";
}

?>