
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/img/fondo.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
          <h4 class="text-center all-tittles" style="margin-bottom: 30px;"><font size="6" face="Algerian">Peliculas chiphysi</font></h4>
          <center>
           <img src="assets/img/video.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
          </center> 
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;"><font size="4" face="Algerian">inicia sesión</font></h4>
             <form action="validaregistro.php" method="POST">

            <div class="group-material-login">
              <input type="text" class="material-login-control" name="realname" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre</label>
            </div><br>
            <div class="group-material-login">
              <input type="email" class="material-login-control" name="nick" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Email</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="pass" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Contraseña</label>
            </div><br>
            <button class="btn-login" type="submit">Registrarse &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
          </form>
        <a href="index.php">
            <button class="btn-login3" type="submit"><i class="zmdi zmdi-arrow-left"></i> &nbsp; ingresar </button>
          </a>
    </div>  
</body>
</html>