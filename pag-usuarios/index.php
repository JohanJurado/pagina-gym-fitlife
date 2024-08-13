<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="usuarios.css">
    <link rel="stylesheet" href="progress.css">

</head>
  
	<?php

	include ("../scripts/conectar.php");
  
      $nombre=$_GET['name'];	
      $contrasenia=$_GET['password'];

	  $sql_buscar="SELECT * FROM usuarios WHERE (nombre_usuario='$nombre') AND (contrasenia_usuario='$contrasenia');";
      $resultado= mysqli_query($mysql,$sql_buscar);

      $fecha="UPDATE usuarios SET `dias_faltantes_plan`=(DATEDIFF (`fecha_plan_usuario`, now())-3) WHERE nombre_usuario='$nombre';";
      $resultado_fecha= mysqli_query($mysql,$fecha);

	  $dato=mysqli_fetch_array($resultado);	  
	  
	  $porcentaje=($dato['dias_faltantes_plan']/$dato['cant_dias_plan'])*100;
	  


  ?>
  
  
<body>
    <footer class="row m-0">
        <div class="col start"><button class="btn btn-dark" onclick="location.href='../'"><--  Volver</button></div>
        <div><h2 class="col m-0">FITLIFE</h2></div>
        <div class="col"></div>
    </footer>
    <main>
        <section class="plan info">
            <h4>Información de usuario</h4>
            <div class="foto">
                <img src="../img/usuarios/<?php echo $dato['foto']; ?>" alt="">
            </div>
            <div>
                <p class="m-0"><h6 class="m-0">Usuario: <?php echo $dato['nombre_usuario']; ?></h6></p>
                <p class="m-0"><h6 class="m-0">Estado: <?php echo $dato['estado']; ?></h6></p>
                <p class="m-0"><h6 class="m-0">Telefono: <?php echo $dato['telefono_usuario']; ?></h6></p>
                <p class="m-0"><h6 class="m-0">Correo: <?php echo $dato['correo_usuario']; ?></h6></p>
            </div>
        </section>
        <section class="plan">    
                <div class="col">
                    <h4>Plan Activo: "<?php echo $dato['estado']; ?>"</h4>
                    <div class="progressbar">
                        <div class="second circle" data-percent="<?php echo $porcentaje; ?>">
                            <strong></strong>
                            <span>Quedan: <?php echo $dato['dias_faltantes_plan']; ?> dias</span>
                            <button data-bs-toggle="modal"  data-bs-target="#modal_estructura">Mirar Planes</button>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
		        <section class="plan ejercicios">
            <h4>Ejercicios Recomendados:</h4>
            <button onclick="location.href='https://1drv.ms/v/s!AvtIncF1s2xRa005FCmdktAtDaE?e=1FlmF4'">
                <img src="../img/brazos-ejercicios.jpeg" alt="">
                <p class="m-0">Ejercicios de Brazo</p></button>
            <button onclick="location.href='https://1drv.ms/v/s!AvtIncF1s2xRbPZ8VjG6qoutT3M?e=GGSAaZ'">
                <img src="../img/pierna-ejercicios.jpg" alt="">
                <p class="m-0">Ejercicios de Pierna</p></button>
            <button onclick="location.href='https://1drv.ms/v/s!AvtIncF1s2xRbQjsi2WzA8xcKyk?e=07sDSP'">
                <img src="../img/pecho-ejercicios.jpg" alt="">
                <p class="m-0">Ejercicios de Pecho</p></button>
            <button onclick="location.href='https://1drv.ms/v/s!AvtIncF1s2xRbq335c3Fww_rGw4?e=aVxRpi'">
                <img src="../img/espalda-ejercicios.jpg" alt="">
                <p class="m-0">Ejercicios de Espalda</p></button>
            <button onclick="location.href='https://1drv.ms/v/s!AvtIncF1s2xRb3S8bsIGIDjHQJ4?e=RWdP67'">
                <img src="../img/core-ejercicios.jpg" alt="">
                <p class="m-0">Ejercicios de Core</p></button>
        </section>

    		<div class="modal"  data-bs-backdrop="static"  id="modal_estructura" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                <form class="modal-content" action="../scripts/comprar-plan.php" method="post"> 
                    <H4 class="modal-header"><p class=" ml-4 mb-0">Comprar Plan</p></H4>
                    <div class="modal-body">
                        <div class="inputs">

                            <div class="dos">
                                    <input type="text" class="form-control" id="floating nombre" placeholder="Nombre" name="nombre" required/>
                                    <input type="password" class="form-control" id="floating apellido" placeholder="Contraseña" name="password" required/>
                            </div>
                            <div>
                                <select class="form-select" name="plan">
                                    <option selected>Selecciona el Plan</option>
                                    <option value="VENCEDOR">VENCEDOR</option>
                                    <option value="TITAN">TITAN</option>
                                    <option value="MONSTER">MONSTER</option>
                                  </select>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating direccion" placeholder="Direccion (Incluido Barrio)" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating postal" placeholder="Código Postal" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating telefono" placeholder="Telefono" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating correo" placeholder="Correo Electronico" required/>
                            </div>
                            <div>
                                <hr>
                                <H6 class="mt-3 ml-1 mb-3">Informacion de Pago: </H6>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating credito" placeholder="N° Tarjeta de Credito" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating tarjetahabiente" placeholder="Nombre Tarjetahabiente" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="floating cedula" placeholder="Numero Cedula" required/>
                            </div>
                            <div>
                                <input type="text" class="form-control mb-3" id="floating cvv" placeholder="Numero CVV" required/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success enviar">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script src="js.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>