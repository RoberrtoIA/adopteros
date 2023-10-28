<?php
   require_once('assets/Connection/database.php');   
   require_once('assets/Model/perro.php');
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Perros en adopción - Adopteros</title>
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
   </head>
   <body>
      
   <!-- Header -->
      <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex align-items-center">
            <img src="assets/img/logo_icono.png" style="width: 45px; padding-bottom:6px;">
            <a href="inicio.html" class="logo me-auto"><img src="assets/img/logo_texto.png"></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                  <li><a class="nav-link scrollto" href="inicio.html">Inicio</a></li>
                  <li><a class="nav-link scrollto" href="inicio.html #acerca-de">Acerca de</a></li>
                  <li class="dropdown">
                     <a class="nav-link scrollto" href="inicio.html #adopcion">
                     <span>Adopción y cuidado</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a class="nav-link scrollto" href="inicio.html #requisitos">Requisitos para adoptar</a></li>
                        <li><a class="nav-link scrollto" href="inicio.html #contribuir">¿Cómo contribuir?</a></li>
                     </ul>
                  </li>
                  <li><a class="active" href="perros-en-adopcion.php">Perros en adopción</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="donar.php" class="get-started-btn">Donar</a>
         </div>
      </header>
      
      <!-- Main Content -->
      <main id="main" style="background-color: #e9e9e9;">
         <section id="titulo_perros_adopcion" class="requirements section-bg" style="margin-top: -20px;
            padding-bottom: 100px;">
            <div class="container" data-aos="fade-up">
               <div class="section-title" style="padding-top: 40px;">
                  <i class="bi bi-house-fill" style="color: #41863e; font-size: 30px;"></i>
                  <h2>Perros en adopción</h2>
                  <p>Ellos tienen mucho amor, esperanza y deseos por conocerte,
                     <br>también necesitan de un hogar
                  </p>
               </div>
            </div>
         </section>
         
         <!-- Perros en adopción -->
         <section id="perros_en_adopcion" class="tabs" style="margin-top: -40px">
            <div class="container" data-aos="fade-up">
               <div class="tab-content">
                  <!-- Inicio Card deck -->
                  <div class="row" style="padding-bottom: 60px;">
                     
                    <?php
                      $tabla = Perro::Get();
                      foreach ($tabla as $row => $item) {         
                    ?>

                     <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6" data-aos="fade-up">
                        <div class="card">
                           <img class="card-img-top img-fluid" src="<?php echo $item->fotografia ?>">
                           <div class="card-body">
                              <h5 class="card-title"><?php echo $item->nombre; ?></h5>
                              <h5 class="card-subtitle">
                              <?php
                                # Si tiene 1 año y 0 meses (1 Año)
                                if ($item->edad == 1 && $item->edad_meses == 0) {
                                    echo "1 año";
                                }
                                # Si tiene 1 año y 1 mes (1 Año 1 Mes)
                                else if ($item->edad == 1 && $item->edad_meses == 1) {
                                    echo "1 año, 1 mes";
                                }
                                # Si tiene más de 1 año y 0 meses (X Años)
                                else if ($item->edad > 1 && $item->edad_meses == 0) {
                                    echo $item->edad . " años";
                                }
                                # Si tiene más de 1 año y 1 mes (X Años, 1 Mes)
                                else if ($item->edad > 1 && $item->edad_meses == 1) {
                                    echo $item->edad . " años, 1 mes";
                                }
                                # Si tiene 1 año y más de 1 mes (1 Año, X Meses)
                                else if ($item->edad == 1 && $item->edad_meses > 1) {
                                    echo "1 año, " . $item->edad_meses . " meses";
                                }
                                # Si tiene más de 1 año y más de 1 mes (X Años, X Meses)
                                else if ($item->edad > 1 && $item->edad_meses > 1) {
                                    echo $item->edad . " años, " . $item->edad_meses . " meses";
                                }
                                # Si tiene 0 años y 1 mes (1 Mes)
                                else if ($item->edad == 0 && $item->edad_meses == 1) {
                                    echo "1 mes";
                                }
                                # Si tiene 0 años y más de 1 mes (X Meses)
                                else if ($item->edad == 0 && $item->edad_meses > 1) {
                                    echo $item->edad_meses . " meses";
                                }
                              ?>
                              </h5>
                              <br>
                              <p class="card-text">
                                 <?php echo $item->descripcion ?>
                              </p>
                           </div>
                        </div>
                     </div>

                     <?php } ?>
                  </div>
                  <!-- Fin Card deck -->

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
                     <p>
                        Recoleta, Buenos Aires, Argentina; <br>Plaza Teniente General Emilio Mitre <br><br>
                        <strong>Teléfono: </strong>+54 15 4089-3717<br>
                        <strong>Email: </strong>adopterosargentina@gmail.com<br>
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
               <div class="copyright" style="padding-top: 10px">
                  &copy; Copyright <strong><span>Adopteros Argentina</span></strong>. 2022 All Rights Reserved
               </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
               <a href="https://www.instagram.com/adopterosargentina/" class="instagram" target="_blank">
               <i class="bx bxl-instagram"></i>
               </a>
               <a href="https://twitter.com/adopteros_arg/" class="twitter" target="_blank">
               <i class="bx bxl-twitter"></i>
               </a>
               <a href="https://www.facebook.com/AdopterosArgentina/" class="facebook" target="_blank">
               <i class="bx bxl-facebook"></i>
               </a>
               <a href="https://www.youtube.com/channel/UCwjWHlJzbmYaIG6NLt2eTpQ/" class="youtube" target="_blank">
               <i class="bx bxl-youtube"></i>
               </a>
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
