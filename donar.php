<?php
require_once('assets/Model/donacion.php');
require_once('assets/vendor/php/panel_de_control_crud_donaciones.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Donar - Adopteros</title>
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
   <link rel="stylesheet" href="assets/vendor/splide-4.0.2/dist/css/splide.min.css">
   <link rel="stylesheet" href="assets/css/carousel.css">
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
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
                     <li><a class="nav-link scrollto" href="inicio.html #requisitos2">Requisitos para adoptar</a></li>
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
   <main id="main" style="background-color: #e9e9e9">
      <section id="requisitos" class="requirements section-bg" style="margin-top: -20px;
            padding-bottom: 100px;">
         <div class="container" data-aos="fade-up">
            <div class="section-title" style="padding-top: 40px;">
               <i class="bi bi-gift-fill" style="color: #41863e; font-size: 30px;"></i>
               <h2>Donaciones</h2>
               <p>¡Tu ayuda significa mucho para nosotros y nuestros perritos!
                  <br>Puedes proporcionar asistencia económica a través de los siguientes medios
               </p>
            </div>
         </div>
      </section>

      <section id="datos_donar" class="tabs">
         <div class="container" data-aos="fade-up">
            <div class="tab-content">
               <div class="tab-pane active show">
                  <div class="row" style="margin-top: -40px;">
                     <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h3>Datos de cuenta bancaria</h3>
                        <div class="text-line" style="width: 325px;"></div>
                        <br>
                        <p> Recordá luego de realizada, ENVIARNOS EL COMPROBANTE
                           <br> o NÚMERO DE OPERACIÓN por mensaje privado o mail a adopterosargentina@gmail.com
                        </p>
                        <ul>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> Banco Santander</li>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> Caja de Ahorros $ N°
                              555-354966/9</li>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> CBU 0720555288000035496690</li>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> Titular: Lara Irene Vadra</li>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> CUIL:27-39627066-3</li>
                           <li style="margin-top: -10px;"><i class="ri-check-line"></i> ALIAS: ADOPTEROS</li>
                        </ul>
                        <p> DESDE EL EXTERIOR, POR AZIMO o WESTERN UNION!
                           <br> A nombre de LARA IRENE VADRA,DNI 39627066
                        </p>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200"> <img src="assets/img/img-4.jpg" class="img-fluid rounded"> </div>
                  </div>
               </div>
            </div>
      </section>

      <section id="opciones_donacion" class="requirements section-bg" style="padding-bottom: 80px;">
         <div class="container" data-aos="fade-up">
            <div class="section-title">
               <h2>Mercado Pago</h2>
               <p>Si donás DESDE TU CUENTA, no nos descuentan la comisión.
                  <br><br>Nuestro email en Mercado Pago es adopterosargentina@gmail.com
                  <br> También podés poner este teléfono y se acredita enseguida y sin descuentos: +1540893717
               </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100" style="margin-top:-30px;">
               <div class="col-md-12">

                  <section id="carousel" class="splide" aria-labelledby="carousel-heading">
                     <!-- <h2 id="carousel-heading">Splide Basic HTML Example</h2> -->

                     <?php
                     $donaciones = Donacion::All();
                     ?>
                     <div class="splide__track">
                        <ul class="splide__list" data-aos="fade-up" data-aos-delay="100">

                           <?php

                           $abrir = true;

                           foreach ($donaciones as $key => $donacion) {
                              $c = $key + 1;

                              if ($c == 1) {
                                 echo '<li class="splide__slide" style="padding-right:20px;">';
                                 echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                 echo '<a href="' . $donacion->url . '" target="_blank">';
                                 echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                 echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -60%);">';
                                 echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '</big></b></h1>';
                                 echo '</span>';
                                 echo '</a>';
                                 echo '</div>';
                              } else if ($c == 2) {
                                 echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                 echo '<a href="' . $donacion->url . '" target="_blank">';
                                 echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                 echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, 220%);">';
                                 echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '$</big></b></h1>';
                                 echo '</span>';
                                 echo '</a>';
                                 echo '</div>';
                                 echo '</li>';
                              } else if ($c == 3) {
                                 echo '<li class="splide__slide" data-aos="fade-up" data-aos-delay="100">';
                                 echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                 echo '<a href="' . $donacion->url . '" target="_blank">';
                                 echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                 echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -60%);">';
                                 echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '$</big></b></h1>';
                                 echo '</span>';
                                 echo '</a>';
                                 echo '</div>';
                              } else if ($c == 4) {
                                 echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                 echo '<a href="' . $donacion->url . '" target="_blank">';
                                 echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                 echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, 220%);">';
                                 echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '$</big></b></h1>';
                                 echo '</span>';
                                 echo '</a>';
                                 echo '</div>';
                                 echo '</li>';
                              } else {
                                 if ($abrir == true) {
                                    echo '<li class="splide__slide" style="padding-right:20px;" data-aos="fade-up" data-aos-delay="100">';
                                    echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                    echo '<a href="' . $donacion->url . '" target="_blank">';
                                    echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                    echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%);">';
                                    echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '$</big></b></h1>';
                                    echo '</span>';
                                    echo '</a>';
                                    echo '</div>';

                                    $abrir = false;
                                    continue;
                                 }

                                 if ($abrir == false) {

                                    echo '<div class="icon-box text-center" style="padding-bottom: 25px;">';
                                    echo '<a href="' . $donacion->url . '" target="_blank">';
                                    echo '<img src="assets/img/violet.png" style="width: 500px;">';
                                    echo '<span style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, 220%);">';
                                    echo '<h1 style="font-size: 1.8rem; color: #f3f3f1;"><b><big>' . $donacion->monto . '$</big></b></h1>';
                                    echo '</span>';
                                    echo '</a>';
                                    echo '</div>';
                                    echo '</li>';

                                    $abrir = true;
                                    continue;
                                 }
                              }
                           }

                           ?>

                        </ul>
                     </div>
                  </section>
               </div>

            </div>

         </div>
      </section>

      <section id="otras_formas_de_donar" class="tabs" style="padding-top: 30px;">
         <div class="container" data-aos="fade-up">
            <div class="tab-content">
               <div class="tab-pane active show">
                  <div class="row">

                     <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h3>Otras formas de contribuir</h3>
                        <div class="text-line" style="width: 320px;"></div>
                        <br>
                        <p> Adoptando, difundiendo, creando conciencia, transitando, siendo voluntario/a, participando.
                        </p>
                        <p> También necesitamos: </p>
                        <ul>
                           <li> <i class="ri-check-fill"></i>Balanceado de buena calidad para perros adultos y
                              cachorros.</li>
                           <li> <i class="ri-check-fill"></i>Pipetas, Antiparasitarios, Curabichera, Platsul.</li>
                           <li> <i class="ri-check-fill"></i>Medicamentos veterinarios, Abrigos de todos los tamaños,
                           </li>
                           <li> <i class="ri-check-fill"></i> Mantas, Correas, Collares, Platitos.</li>
                        </ul>
                     </div>

                     <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/img-444.jpg" class="img-fluid rounded">
                     </div>

                  </div>
                  <br>
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
                     <li> <i class="bx bx-chevron-right"></i> <a href="inicio.html">Inicio</a> </li>
                     <i class="bx bx-chevron-right"></i> <a href="donar.php">Donar</a>
                     <li> <i class="bx bx-chevron-right"></i> <a href="perros-en-adopcion.php">Perros en adopción</a>
                     </li>
                     <i class="bx bx-chevron-right"></i> <a href="contacto.php">Contacto</a>
                  </ul>
               </div>

               <!-- Mapa -->
               <div class="col-lg-6 col-md-6 footer-newsletter">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13138.54569057835!2d-58.3970969!3d-34.5880651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafc4c06da4f0d167!2sAdopteros%20Argentina!5e0!3m2!1sen!2sjp!4v1631593222641!5m2!1sen!2sjp" width="120%" height="160" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </div>

      <!-- Bottom -->
      <div class="container d-md-flex py-4">
         <div class="me-md-auto text-center text-md-start">
            <div class="copyright" style="padding-top: 10px"> &copy; Copyright <strong><span>Adopteros
                     Argentina</span></strong>. 2022 All Rights Reserved </div>
         </div>
         <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="https://www.instagram.com/adopterosargentina/" class="instagram" target="_blank"> <i class="bx bxl-instagram"></i> </a>
            <a href="https://twitter.com/adopteros_arg/" class="twitter" target="_blank"> <i class="bx bxl-twitter"></i>
            </a>
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
   <script src="assets/vendor/splide-4.0.2/dist/js/splide.min.js"></script>
   <script src="assets/js/main.js"></script>

   <script>
      //configurar carousel de donaciones
      document.addEventListener('DOMContentLoaded', function() {
         new Splide('#carousel', {
            autoplay: true,
            perPage: 2,
            breakpoints: {
               640: {
                  perPage: 1,
               },
            },
         }).mount();
      });
   </script>
</body>

</html>