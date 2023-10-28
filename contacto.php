<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Contacto - Adopteros</title>
      <link href="assets/img/icon.png" rel="icon">
      
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
      <!-- Vendor Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
      <script src="sweetalert2.min.js"></script>
      <link rel="stylesheet" href="sweetalert2.min.css">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   
   <body>
      <!-- Header -->
      <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex align-items-center">
            <img src="assets/img/logo_icono.png" style="width: 45px; padding-bottom:6px;">
            <a href="inicio.html" class="logo me-auto">
               <img src="assets/img/logo_texto.png">
            </a>
            <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                  <li><a class="nav-link scrollto" href="inicio.html">Inicio</a></li>
                  <li><a class="nav-link scrollto" href="inicio.html #acerca-de">Acerca de</a></li>
                  <li class="dropdown">
                     <a class="nav-link scrollto" href="inicio.html #adopcion"> <span>Adopción y cuidado</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a class="nav-link scrollto" href="inicio.html #requisitos">Requisitos para adoptar</a></li>
                        <li><a class="nav-link scrollto" href="inicio.html #contribuir">¿Cómo contribuir?</a></li>
                     </ul>
                  </li>
                  <li><a href="perros-en-adopcion.php">Perros en adopción</a></li>
                  <li><a class="active" href="contacto.php">Contacto</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i> 
            </nav>
            <a href="donar.php" class="get-started-btn">Donar</a> 
         </div>
      </header>

      <!-- Main Content -->
      <main id="main" style="background-color: #e9e9e9;">
         
         <!-- Nueva Sección -->
         <section id="nueva_seccion" class="tabs" style="padding-top: 120px;">
            <div class="container" data-aos="fade-up">
               <div class="tab-content">
                  <div class="row">
                     
                     <div class="col-6" data-aos="fade-up">
                        <h3>Contacto</h3>
                        <div class="text-line" style="width: 230px;"></div>
                        <br>
                        <form method="POST">
                           <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Correo electrónico:</label>
                              <input type="email" maxlength="40" name="correo" class="form-control" placeholder="Ingrese el correo en el que desea recibir su respuesta..." id="txtMail" aria-describedby="emailHelp"> 
                           </div>
                           <div class="mb-3">
                              <label for="Asunto" class="form-label">Asunto:</label>
                              <input type="text" maxlength="50" name="asunto" class="form-control" placeholder="Ingrese una breve descripción de su mensaje..." id="txtAsunto" aria-describedby="asuntoEntry"> 
                           </div>
                           <div class="mb-1">
                              <label for="Message" class="form-label">Mensaje:</label>
                              <textarea class="form-control" maxlength="500" name="mensaje" id="txtMensaje" placeholder="Ingrese su mensaje aquí..." rows="3"></textarea>
                           </div>
                           <div class="mb-1">
                              <button type="submit" name="enviar" class="btn login-btn">Enviar correo</button>
                           </div>
                        </form>
                        <?php
                           require_once("assets/vendor/php/correo.php");        
                        ?>
                     </div>

                     <div class="col-6"> 
                        <img class="img-fluid rounded" src="assets/img/img-3.jpg" style="height: 90%">
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- Footer -->
      <footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  
                  <!-- Datos de contacto -->
                  <div class="col-lg-3 col-md-6 footer-contact">
                     <h3>Adopteros<span>.</span></h3>
                     <p> Recoleta, Buenos Aires, Argentina;
                        <br>Plaza Teniente General Emilio Mitre
                        <br>
                        <br> <strong>Teléfono: </strong>+54 15 4089-3717
                        <br> <strong>Email: </strong>adopterosargentina@gmail.com
                        <br> 
                     </p>
                  </div>
                  
                  <!-- Enlaces -->
                  <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Enlaces de utilidad</h4>
                     <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="inicio.html">Inicio</a></li>
                        <i class="bx bx-chevron-right"></i> <a href="donar.php">Donar</a>
                        <li><i class="bx bx-chevron-right"></i> <a href="perros-en-adopcion.php">Perros en adopción</a></li>
                        <i class="bx bx-chevron-right"></i> <a href="contacto.php">Contacto</a> 
                     </ul>
                  </div>
                  
                  <!-- Mapa -->
                  <div class="col-lg-6 col-md-6 footer-newsletter">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13138.54569057835!2d-58.3970969!3d-34.5880651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafc4c06da4f0d167!2sAdopteros%20Argentina!5e0!3m2!1sen!2sjp!4v1631593222641!5m2!1sen!2sjp" width="120%" height="160" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>

               </div>
            </div>
         </div>

         <!-- Bottom -->
         <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
               <div class="copyright" style="padding-top: 10px"> &copy; Copyright <strong><span>Adopteros Argentina</span></strong>. 2022 All Rights Reserved </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
               <a href="https://www.instagram.com/adopterosargentina/" class="instagram" target="_blank"> <i class="bx bxl-instagram"></i> </a>
               <a href="https://twitter.com/adopteros_arg/" class="twitter" target="_blank"> <i class="bx bxl-twitter"></i> </a>
               <a href="https://www.facebook.com/AdopterosArgentina/" class="facebook" target="_blank"> <i class="bx bxl-facebook"></i> </a>
               <a href="https://www.youtube.com/channel/UCwjWHlJzbmYaIG6NLt2eTpQ/" class="youtube" target="_blank"> <i class="bx bxl-youtube"></i> </a>
            </div>
         </div>
      </footer>

      <!-- Go top -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"> 
         <i class="bi bi-arrow-up-short"></i> 
      </a>
      
      <!-- Vendor JS Files -->
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>