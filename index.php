<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="usuarios.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>FITLIFE</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&display=swap');    
    </style>
</head>
<body>
    <nav class="row m-0">
        <div class="logo col-md-4 col-sm-6"><img  src="img/logo.jpg" alt="logo"></div>
        <ul class="col-md-4 d-sm-none d-md-flex">
            <li><a href="#banner">INICIO</a></li>
            <li><a href="#recursos-gym">RECURSOS</a></li>
            <li><a href="#horarios">INFO</a></li>
            <li><a href="#contacto">CONTACTO</a></li>
        </ul>
        <div class="botones col-md-4 col-sm-6">
            <button onclick="location.href='inicio-sesion/index.html'" class="ingresar-btn">INGRESAR</button>
            <a href="registrarse/index.html"><button class="unirme-btn">UNIRME</button></a>
        </div>
    </nav>
    <section class="banner row m-0">
        <div class="texto-banner col-6">
            <P class="impact">BIENVENIDO<br> A <strong>FITLIFE</strong></P>
            <p class="montserrat-regular">¡VIVE LA MEJOR <br>EXPERIENCIA<br> DE ENTRENAMIENTO!</p>
            <p class="montserrat-bold m-0">Y DESCUBRE TU</p>
            <div>
                <p>VERDADERO</p>
                <p class="potencial">POTENCIAL</p>
            </div>
            <a href="registrarse/index.html"><button>EMPIEZA YA</button></a>
        </div>
        <div class="img-banner col-6">
            <img src="img/mancito sin fondo.png" alt="hombre-gym">
        </div>
    </section>
    <section class="planes">
        <h2>ELIGE TU PLAN Y</h2>
        <h2 class="amarillo">ENTRENA YA</h2>

        <div class="fila precios borde">
            <p>Beneficios</p>
            <p class="desc">Vencedor</p>
            <p class="desc">Titan</p>
            <p class="desc">Monster</p>
        </div>
        <div class="fila oscura">
            <p>Area de peso libre, peso <br> integrado, cardio y clases grupales</p>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
        </div>
        <div class="fila clara">
            <p>Acceso a todas las áreas <br> del gimnasio</p>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
        </div>
        <div class="fila oscura">
            <p>Acceso a otras unidades de <br> la cadena</p>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img class="equis" src="img/equis-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
        </div>
        <div class="fila clara">
            <p>Sin cargo de cancelación</p>
            <div><img class="equis" src="img/equis-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
        </div>
        <div class="fila oscura">
            <p>Invitar a 5 amigos al mes <br> a entrenar</p>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
            <div><img class="equis" src="img/equis-plan-gym.png" alt="aceptar"></div>
            <div><img src="img/chulo-plan-gym.png" alt="aceptar"></div>
        </div>
        <div class="fila clara">
            <p>Duración de la suscripción</p>
            <p class="duracion">2 MESES</p>
            <p class="duracion">5 MESES</p>
            <p class="duracion">7 MESES</p>
        </div>

        <div class="fila precios">
            <p></p>
            <?php
            
                include ("scripts/conectar.php");
                $sql_buscar="SELECT precio_plan FROM planes";
                $buscador=mysqli_query($mysql,$sql_buscar);

                while ($plan=mysqli_fetch_array($buscador)){
                    echo "<small>DESDE <br>$".number_format($plan['precio_plan'])."</small>";
                }
            
            ?>
        </div>

        <a href="#"><button  data-bs-toggle="modal"  data-bs-target="#modal_estructura">COMPRAR PLAN</button></a>

    </section>
    <section id="recursos-gym" class="recursos-gym">
        <img class="fondo" src="img/fondo-gym.jpg" alt="">
            <p class=" texto texto-blanco">VIVE LA EXPERIENCIA FITLIFE:</p>
        <p class="texto texto-amarillo">TECNOLOGIA DE PUNTA Y LAS MEJORES <br> 
            INSTALACIONES</p>
        <div class="img-recursos">
            <div class="sm-col-12">
                <img src="img/equipos-gym.jpg" alt="equipos-gym">
                <p class="m-0">EQUIPOS DE ALTO NIVEL</p>
            </div>
            <div class="sm-col-12">
                <img src="img/salon-gym.jpg" alt="salon-gym">
                <p class="m-0">SALONES GRUPALES</p>
            </div>
            <div class="sm-col-12">
                <img src="img/musculacion-gym.jpeg" alt="musculacion-gym">
                <p class="m-0">ZONA DE MUSCULACIÓN</p>
            </div>
            <div class="sm-col-12">
                <img src="img/cardio-gym.jpg" alt="cardio-gym">
                <p class="m-0">ZONA DE CARDIO</p>
            </div>
        </div>
        <a href="registrarse/index.html"><button>INSCRIBETE AHORA</button></a>
        </div>
    </section>
    <section id="contacto" class="contacto row m-0">
        <div class="img-contacto col-6 p-0">
            <img src="img/contacto-gym.jpg" alt="">
        </div>
        <form class="col-6" action="https://formsubmit.co/ftlife2030@hotmail.com" method="POST">
            <h2>CONTACTANOS</h2>
            <hr>
            <div>
                <input type="text" name="name" placeholder="NOMBRE:" required>
                <input type="email" name="email" placeholder="CORREO:" required>
                <textarea placeholder="MENSAJE:" name="text" required rows="4"></textarea>
            </div>
            <button type="submit">ENVIAR</button>
        </form>
    </section>
    <section class="articulos">
        <h2>ARTÍCULOS DE INTERES</h2>
        <hr>
        <div class="img">
            <div>
                <img src="img/evitar-lesiones-gym.jpg" alt="evitar-lesiones-gym">
                <div class="texto">
                    <p class="m-1">
                        ¿COMO EVITAR <br> LAS LESIONES?
                    </p>
                    <small>
                        TEN EN CUENTA ESTOS  4 <br> PILARES...
                    </small>
                </div>
                
                <a href="https://fitnesspeoplecolombia.com/como-evitar-las-lesiones/">LEER MAS</a>
            </div>
            <div>
                <img src="img/ansiedad-gym.jpg" alt="ansiedad-gym">
                <div class="texto">
                    <p class="m-1">
                        ¿COMO COMBATIR <br> LA ANSIEDAD?
                    </p>
                    <small>
                        SEGURAMENTE ALGUNAS <br> PERSONAS ESTAN <br>FAMILIARIZADAS CON...
                    </small>
                </div>
                
                <a href="https://fitnesspeoplecolombia.com/como-combatir-la-ansiedad/">LEER MAS</a>
            </div>
            <div>
                <img src="img/masa-muscular-gym.jpg" alt="masa-muscular-gym">
                <div class="texto">
                    <p class="m-1">
                        ¿QUIERES GANAR <br> MAS MASA <br> MUSCULAR?
                    </p>
                    <small>
                        TEN EN CUENTA ESTOS  4 <br> PILARES...
                    </small>
                </div>
                
                <a href="https://fitnesspeoplecolombia.com/masa-muscular/">LEER MAS</a>
            </div>
        </div>
    </section>
    <section id="horarios" class="horarios row  m-0">
        <div class="col-6 info-horarios">
            <img class="" src="img/horarios-2-gym.jpg" alt="horarios-2-gym">
            <div>
                <h2 class="blanco m-0">UNETE A NOSOTROS</h2>
                <hr>
                <h2 class="amarillo mt-4">HORARIOS</h2>
            </div>
            <p>- <strong>LUNES A VIERNES</strong>: 8:00 A 17:00 <br>
            - <strong>SABADOS Y DOMINGOS</strong>: 8:00 A 13:00</p>
            <div class="pt-3">
                <h6 class="mb-4">DIRECCION</h6>
                <p class="p-0">CLL 15 AV 3-4 BARRIO LA PLAYA</p>
            </div>
        </div>
        <div class="col-6 img-horarios p-0">
            <img src="img/horarios-gym.jpg" alt="horarios-gym">
        </div>
    </section>
  <section class="p-5 foro">
            <h3>Foro de Preguntas</h3>
            <form action="subir-pregunta-foro.php" class="foro-form" method="post">
                <input class="input" type="text" placeholder="Escriba aqui su pregunta" name="usuario" class="rta" required>
                <button class="btn btn-success" type="submit">Enviar Pregunta</button>
            </form>
        <?php

            include ('conectar.php');

            $sql_buscar="SELECT * FROM foro";
            $resultado= mysqli_query($mysql,$sql_buscar);

			while($lista=mysqli_fetch_array($resultado)){
              
              if ($lista['estado']!='sin responder'){
                echo '

                    <form class="foro-form" >
                        <label class="mb-0"><strong>Pregunta: </strong>'.$lista['pregunta_usuario'].'</label>
                        <label class="input"><strong>Respuesta: </strong>'.$lista['respuesta_admin2'].'</label>
                    </form>

                ';  
              }
              
              
            }

		?>
  
  </section>
    <footer class="m-0">
        <div>
            <div>
                <h6>NAVEGACIÓN</h6>
                <p><a href="#">- INICIO </a><br><a href="#recursos-gym">- RECURSOS</a> <br><a href="#horarios">- INFO </a><br><a href="#contacto">- CONTACTO</a></p>
            </div>
            <div>
                <h6>DIRECCIÓN</h6>
                <p>CLL 15 AV 3-4 <br> BARRIO <br>LA PLAYA</p>
            </div>
            <div>
                <h6>HORARIOS</h6>
                <p>- LUNES A VIERNES: <br>--> 8:00 A 17:00 <br><br>-SABADOS Y DOMINGOS: <br>--> 8:00 A 13:00</p>
            </div>
            <div class="llamada">
                <h4>¡UNETE A NUESTRA COMUNIDAD!</h4>
                <a href="registrarse/index.html"><button>INSCRIBIRME</button></a>
            </div>
            <div class="img-footer">
                <img src="img/logo.jpg" alt="logo-gym">
            </div>
        </div>
      <div class="iconos">
            <a target="_blank" href="https://instagram.com/fit_life.2030?igshid=NzZlODBkYWE4Ng=="><i class="bi bi-instagram fs-4"></i></a>
            <a target="_blank" href="https://www.facebook.com/profile.php?id=61552095620488&mibextid=ZbWKwL"><i class="bi bi-facebook fs-4"></i></a>
            <a target="_blank" href="https://wa.me/3014733164"><i class="bi bi-whatsapp fs-4"></i></a>
	    <p class="m-0">Siguenos en nuestras redes sociales: </p>
      </div>
    </footer>
  
  
  
    		<div class="modal"  data-bs-backdrop="static"  id="modal_estructura" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                <form class="modal-content" action="../gym2/scripts/comprar-plan.php" method="post"> 
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>