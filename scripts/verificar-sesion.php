<?php

    include ('conectar.php');

    $usuario=$_POST["usuario"];
    $contrasenia=$_POST["contrasenia"];

    $sql_buscar="SELECT * FROM usuarios WHERE (nombre_usuario='$usuario') AND (contrasenia_usuario='$contrasenia');";
    $resultado= mysqli_query($mysql,$sql_buscar);
    $estado=mysqli_fetch_array($resultado);

	$name=$estado['nombre_usuario'];
	$password=$estado['contrasenia_usuario'];

    if ($estado['nombre_usuario']=="admin"){
        echo "
        <script>
            alert ('Bienvenido Administrador');
            location.href='../admin/index.php?name=$name';
        </script>
        ";
    }
	else if ($estado['nombre_usuario']=="admin2"){
        echo "
        <script>
            alert ('La inserccion de los datos fue correcta');
            location.href='../admin2/index.php?name=$name';
        </script>
        ";
    }
    else if ($estado['estado']){
        echo "
        <script>
            alert ('La inserccion de los datos fue correcta');
            location.href='../pag-usuarios/index.php?name=$name&password=$password';
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert ('No se encontro ningun usuario con estos datos');
            location.href='../inicio-sesion/';
        </script>
        ";
    }

?>

