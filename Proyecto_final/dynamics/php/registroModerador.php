<?php

  $include = include ("./config.php");
  $con = connect();
  session_start ();

    function asignar($input)
    {
      $input = (isset($_POST[$input]) && $_POST[$input] != "")? $_POST[$input] : NULL;
      return $input;
    }

    $rol = asignar("role");

  if (!isset ($rol))
  {
    header ("location:./seleccionRol.php");
  } else 
  {
    $_SESSION["Rol"] = $rol;
    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>Moderador</title>
        <link rel="stylesheet" href="../../statics/styles/registro.css">
      </head>
      <body>
        <main class="Registros">
          
          <article class="Recordatorio">
      
            <p>Estimado moderador@, por favor ingresa los datos correspondientes, recuerda que tu número de cuenta debe de estar vigente, por lo que si eres de generaciones pasadas, no podrás entrar.</p>
            <hr>
            <p>Asimismo, tu número de cuenta debió de haber sido dado de alta previamente para que la plataforma te permita el acceso, de lo contrario, no podrás entrar.</p>
      
          </article>
          <article class="Formulario">
      
            <form action="./paginaPrincipal.php" method="post" target="_self">
      
              <p class="texto-m">Nombre:</p>
              <input class="input-datos" type="text" id="nombre" name="nombre" required>
      
              <p class="texto-m">Nombre de usuario:</p>
              <input class="input-datos" type="text" id="username" name="username" required>
      
              <p class="texto-m">Número de cuenta:</p>
              <input class="input-datos" type="text" id="nCuenta" name="nCuenta" minlength="9" maxlength="9" required>
      
              <p class="texto-m">Email:</p>
              <input class="input-datos" type="email" id="email" name="email" required>
      
              <p class="texto-m">Contraseña:</p>
              <input class="input-datos" type="password" id="contraseña" name="contraseña" minlength="8"  maxlength="16" required>
      
              <p class="texto-m">Grupo:</p>
              <input class="input-datos" type="text" id="grupo" name="grupo"   minlength="3"  maxlength="3" required>
      
              <!-- <input type="checkbox" id="recordar" name="recordar">
              <label for="recordar">Recordar usuario</label><br><br> -->
      
              <div class="row-center">
                <button type="submit" class="boton-submit" value="Registrarse">Registrarse</button>
              </div>
      
              <!-- <a href="#">¿Olvidaste tu contraseña?</a><br> -->
              <a href="#">¿Tienes duda en alguno de los campos?</a><br><br>
      
            </form>
      
            <a href="./seleccionRol.php" class="Roles">Seleccionar Rol de Nuevo</a>
      
          </article>
        </main>
        
        <footer class="Registros">
      
          <article class="Avisolegal">
            <h1>CONDICIONES DE USO</h1>
            <p>Pertenecer y ser alumno y/o autoridad activa de la preparatoria no.6 Antonio Caso</p>
          </article>
      
          <article class="Avisolegal">
            <h1>AVISO LEGAL</h1>
            <p>Hecho en México, todos los derechos reservados 2014-2023. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica, de otra forma requiere permiso por escrito de la Institución.</p>
          </article>
      
        </footer>
        
      </body>
    </html>';
  }
?>