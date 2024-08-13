<?php

    include ('conectar.php');

    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $foto=$_FILES['foto']['name'];

    $destino='img';
    move_uploaded_file($_FILES['foto']['tmp_name'], '../'.$destino.'/usuarios/'.$_FILES['foto']['name']);

    $sql_insertar="INSERT INTO usuarios (`id_usuario`,`nombre_usuario`,`contrasenia_usuario`,`estado`,`foto`,`telefono_usuario`,`correo_usuario`,`fecha_plan_usuario`, `cant_dias_plan`, `dias_faltantes_plan`) VALUES (NULL,'$usuario','$contrasenia','INACTIVO','$foto','$telefono','$correo','NULL', 1, 0)";

    $guardardatos= mysqli_query($mysql,$sql_insertar);

    if ($guardardatos){
        echo "
        <script>
            alert('El usuario fue creado con exito');
    	    location.href='../inicio-sesion/index.html';
        </script>
        ";
    }
else {
  echo "no se guardaron los datos";
}

?>