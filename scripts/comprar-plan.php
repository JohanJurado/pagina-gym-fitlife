<?php

	include ('conectar.php');

    $plan = $_POST['plan'];
	$nombre = $_POST['nombre'];
    $password = $_POST['password'];

    if ($plan=="VENCEDOR"){
        $precio=70000;
        $dias=60;
        $meses=2;
    } else if ($plan=="TITAN"){
        $precio=150000;
        $dias=150;
        $meses=5;
    } else if ($plan=="MONSTER"){
        $precio=200000;
        $dias=210;
        $meses=7;
    }

	$sql_actualizar="UPDATE usuarios SET estado='$plan', fecha_plan_usuario= date_add(now(), interval $meses month) , cant_dias_plan=$dias, dias_faltantes_plan=$dias WHERE nombre_usuario='$nombre' and contrasenia_usuario='$password'";
	
	$resultado= mysqli_query($mysql,$sql_actualizar);

    if ($resultado){
        echo "<script>
            alert ('El pago del plan $plan por $precio se ha realizado satisfactoriamente');
            location.href='../index.php';
        </script>";
    }
else {
        echo "error";
    }

?>