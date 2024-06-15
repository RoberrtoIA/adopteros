<?php
   require_once('assets/vendor/php/login_auth.php');
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Adopteros Argentina</title>
      <link href="assets/img/icon.png" rel="icon">
      
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
      <!-- Vendor Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
   </head>

   <body class="text-center" style="padding-top: 60px; background-color:#0e0e0e;">
      <div class="container col-3" style="color: rgb(249, 255, 255);" >
         <form class="form-signin" action="" method="POST" data-aos="fade-up">
            <img src="assets/img/logo_icono.png" width="90px">
            <h1 class="h3 mb-3 font-weight-normal">Inicio de sesión</h1>
            <div class="text-underline" style="margin-top: -5px;"></div>
            <br>
            <?php 
               if($login_exception == 1) {
            ?>
            <p class="text-center" style="color: #e34061; margin-top: -15px; font-size:12px;">
               <b> Acceso denegado:<br>Usuario o contraseña incorrecta</b>
            </p>
            <?php 
               }       
            ?>
            
            <!-- Usuario -->
            <div class="row mb-2" style="padding-top: 5px;">
               <div class="col-xl-12">
                  <input type="text" name="txt_usuario" class="form-control text-center"
                     placeholder="Nombre de usuario" maxlength="20">
               </div>
            </div>
            
            <!-- Password -->
            <div class="row mb-2" style="padding-top: 5px;">
               <div class="col-xl-12">
                  <input type="password" name="txt_password" class="form-control text-center"
                     placeholder="Password" maxlength="20">
               </div>
            </div>
            
            <button class="btn login-btn col-12" type="submit" name="btn_ingresar">
               Iniciar sesión
            </button> 
            <p class="text-muted" style="padding-top: 15px;">&copy; <?= date('Y'); ?> Adopteros Argentina</p>
         
         </form>
      </div>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>