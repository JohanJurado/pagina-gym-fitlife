<?php

    $servidor=('127.0.0.1');
    $user=('ocuello');
    $clave=('1093592736');
    $bd=('ocuello_gym');

    $mysql= new mysqli($servidor,$user,$clave,$bd);

    if (!$mysql) {
        echo "error al conectar".mysqli_error($mysql);
    }


?>