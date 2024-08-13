<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../pag-usuarios-guia/usuarios.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="admin.css">

</head>

<body>
    <footer class="row m-0">
        <div class="col start"><button class="btn btn-dark" onclick="location.href='../'"><--  Volver</button></div>
        <div><h2 class="col m-0">FITLIFE ADMIN</h2></div>
        <div class="col end"><button class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#modal_estructura">Cambiar Precios</button></div>
    </footer>
    <main>
    <h3>Usuarios:</h3>
        <div class="tabla">
            
            <?php

            include ('conectar.php');

            $sql_buscar="SELECT * FROM usuarios";
            $resultado= mysqli_query($mysql,$sql_buscar);

            echo '
           
            <table class="table table-striped table-dark mb-0">
            <thead>
              <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Plan</th>
                <th class="text-center" scope="col">Dia Inicio</th>
                <th class="text-center" scope="col">Dias Faltantes</th>
                <th class="text-center" scope="col">Borrar Usuario</th>
              </tr>
            </thead>
            <tbody>
             ';

             while($lista=mysqli_fetch_array($resultado)){
                echo '
                <tr>
                    <td>'.$lista['nombre_usuario'].'</td>
                    <td>'.$lista['telefono_usuario'].'</td>
                    <td>'.$lista['correo_usuario'].'</td>
                    <td>'.$lista['estado'].'</td>
                    <td class="text-center">'.$lista['fecha_plan_usuario'].'</td>
                    <td class="text-center">'.$lista['dias_faltantes_plan'].'</td>
                    <td class="text-center"><a type="button" href="borrar.php?id='.$lista['id_usuario'].'" class="btn btn-danger">Borrar</a></td>
                </tr>';
             }

            echo '
            </tbody>
            </table>';

            ?>

        </div>

        <!--MODAL DE CAMBIAR PRECIOS DE PLANES-->

        <div class="modal"  data-bs-backdrop="static"  id="modal_estructura" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                <div class="modal-content"> 
                    <H4 class="modal-header"><p class=" ml-2 mb-0">Cambiar Precios de Plan</p></H4>
                    <div class="modal-body">
                        <form class="inputs" method="post">
                            <?php
                            
                            include ('conectar.php');

                            $sql_buscar_plan="SELECT * FROM planes";
                            $resultado= mysqli_query($mysql,$sql_buscar_plan);
                            $i=1;

                            while($lista_planes=mysqli_fetch_array($resultado)){

                                echo '
                                
                                <div class="dos">
                                    <label class="form-label" for="'.$lista_planes['nombre_plan'].'">PLAN '.$lista_planes['nombre_plan'].':</label>
                                    <input type="number" class="form-control input" id="'.$lista_planes['nombre_plan'].'" name="'.$lista_planes['nombre_plan'].'" value="'.$lista_planes['precio_plan'].'" required/>
                                </div>
                                
                                ';
                            }
                            
                            ?>
                          <div>
                            <button class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-success" name="enviar">
                          </div>
                            
                        </form>
                        <?php
                        
                            include ('conectar.php');
                            
                            if (isset($_POST['enviar'])){
                                if (!empty($_POST['VENCEDOR']) && !empty($_POST['TITAN']) && !empty($_POST['MONSTER'])){
                                    $vencedor=$_POST['VENCEDOR'];
                                    $titan=$_POST['TITAN'];
                                    $monster=$_POST['MONSTER'];

                                    $sql_actualizar_vencedor="UPDATE planes SET precio_plan='$vencedor' WHERE nombre_plan='VENCEDOR'";
                                    $sql_actualizar_titan="UPDATE planes SET precio_plan='$titan' WHERE nombre_plan='TITAN'";
                                    $sql_actualizar_monster="UPDATE planes SET precio_plan='$monster' WHERE nombre_plan='MONSTER'";

                                    $resultado= mysqli_query($mysql,$sql_actualizar_vencedor);
                                    $resultado= mysqli_query($mysql,$sql_actualizar_titan);
                                    $resultado= mysqli_query($mysql,$sql_actualizar_monster);

                                    if ($resultado){
                                        echo '<h6 class="m-0 pt-2">Los datos se han actualizado correctamente</h6>';
                                    }
                                    else {
                                        echo '<h6 class="m-0 pt-2">Ocurrio un error al actualizar los datos</h6>';

                                    }

                                }
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--FIN MODAL DE CAMBIAR PRECIOS DE PLANES-->

    </main>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script src="js.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>