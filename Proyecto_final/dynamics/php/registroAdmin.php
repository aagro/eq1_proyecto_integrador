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
    // echo $_SESSION["Rol"];
    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <link rel="stylesheet" href="../../statics/styles/registro.css">
        <script src="../js/registro.js"></script>
      </head>
      <body>
        <main class="Registros">
      
          <article class="Recordatorio">
      
            <p>Estimado Administrador@, por favor ingresa los datos correspondientes, recuerda que tu número de cuenta debe de estar vigente, por lo que si eres de generaciones pasadas, no podrás entrar.</p>
            <hr>
            <p>Recuerda que en contraseña debes poner la clave proporcionada por tu organización.</p>
      
          </article>
          <article class="Formulario">
      
            <form action="./paginaPrincipal.php" method="post" id="formRegistro">
      
              <p class="texto-m">Nombre completo:</p>
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
              <select id="grupo" name="grupo"></select> <br><br>';
              // <input class="input-datos" type="text" id="grupo" name="grupo" minlength="3"  maxlength="3" required>
            echo '
              <!-- <div class="row">
                <input class="remember-me" type="checkbox" id="recordar" name="recordar">
                <p >Recordar usuario</p>
              </div> -->
      
              <div class="row-center">
                <button type="submit" class="boton-submit" value="Registrarse">Registrarse</button>
              </div>
      
              <!-- <a href="#">¿Olvidaste tu contraseña?</a><br> -->
              <a href="#">¿Tienes duda en alguno de los campos?</a><br><br>
      
            </form>
      
            <a href="./seleccionRol.html" class="Roles">Seleccionar Rol de Nuevo</a>
            
          </article>
      
        </main>
      </body>
    </html>';
  }
?>