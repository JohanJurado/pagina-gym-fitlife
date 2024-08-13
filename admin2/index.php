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
        <div><h2 class="col m-0">FITLIFE ADMIN 2</h2></div>
          <div class="col end"></div>
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
              </tr>
            </thead>
            <tbody>
             ';

             while($lista=mysqli_fetch_array($resultado)){
                
                if ($lista['nombre_usuario']!='admin' && $lista['nombre_usuario']!='admin2'){
                echo '
                
                  <tr>
                      <td>'.$lista['nombre_usuario'].'</td>
                      <td>'.$lista['telefono_usuario'].'</td>
                      <td>'.$lista['correo_usuario'].'</td>
                      <td>'.$lista['estado'].'</td>
                      <td class="text-center">'.$lista['fecha_plan_usuario'].'</td>
                      <td class="text-center">'.$lista['dias_faltantes_plan'].'</td>
                  </tr>';
                  }
             }

            echo '
            </tbody>
            </table>';

            ?>

        </div>
      <h3 class="mt-3 mb-0 pb-0">Mensajes del Foro:</h3>
      
         <?php

            include ('conectar.php');

            $sql_buscar="SELECT * FROM foro";
            $resultado= mysqli_query($mysql,$sql_buscar);

			while($lista=mysqli_fetch_array($resultado)){
              
              if ($lista['estado']!='respondido'){
                echo '

                    <form action="subir-foro.php?msg='.$lista['id_foro'].'" class="foro-form" method="post">
						<label for="pregunta" class="mb-0"><strong>Pregunta: </strong>'.$lista['pregunta_usuario'].'</label>
                        <input type="text" placeholder="Escriba aqui su respuesta" name="usuario" class="rta" required>
                        <button class="btn btn-success" type="submit">Enviar Respuesta</button>
                    </form>

                ';  
              }
              
              
            }

		?>

    </main>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script src="js.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>