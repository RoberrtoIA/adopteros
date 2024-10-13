<?php
   require_once('assets/Connection/database.php');   
   require_once('assets/Model/informacion_contacto.php');
   require_once('assets/Model/pregunta.php');
   require_once('assets/Model/requisito.php');
   require_once('assets/Model/contribucion.php');
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Inicio - Adopteros</title>
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
            <a href="inicio.php" class="logo me-auto">
               <img src="assets/img/logo_texto.png">
            </a>
            <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                  <li><a class="nav-link scrollto active" href="inicio.php">Inicio</a></li>
                  <li><a class="nav-link scrollto" href="#acerca-de">Acerca de</a></li>
                  <li class="dropdown">
                     <a class="nav-link scrollto" href="#adopcion"> 
                        <span>Adopción y cuidado</span><i class="bi bi-chevron-down"></i>
                     </a>
                     <ul>
                        <li><a class="nav-link scrollto" href="#contribuir">¿Cómo contribuir?</a></li>
                        <li><a class="nav-link scrollto" href="#requisitos">Requisitos para adoptar</a></li>
                     </ul>
                  </li>
                  <li><a href="perros-en-adopcion.php">Perros en adopción</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i> 
            </nav>
            <a href="donar.php" class="get-started-btn">Donar</a>
         </div>
      </header>

      <!-- Hero Section -->
      <section id="hero" class="d-flex align-items-center">
         <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
               <div class="col-xl-6">
                  <h1>¡Adopta a tu nuevo mejor amigo hoy!</h1>
                  <br>
                  <br>
                  <h2 style="line-height: 35px;">
                     Adoptá un amigo.
                     <br>
                     Tu amor cambia vidas
                  </h2>
                  <a href="perros-en-adopcion.php" class="btn-get-started" target="_blank">
                     Ver perros en adopción
                  </a> 
               </div>
            </div>
         </div>
      </section>

      <!-- Main Content -->
      <main id="main" style="background-color: #1b1b1b;">
         
         <!-- Acerca de -->
         <section id="acerca-de" class="about section-bg" style="padding-top: 50px; padding-bottom: 60px;">
            <div class="container" data-aos="fade-up">
               <div class="row no-gutters">
                  
                  <div class="content col-xl-5 d-flex align-items-stretch">
                     <div class="content">
                        <h3>Acerca de nosotros</h3>
                        <p> Somos un grupo de personas que rescata, recupera y da en adopción a perros que han sido abandonados o maltratados
                           <br>
                           <br> Los curamos, les damos atención veterinaria y luego buscamos que sean adoptados por familias maravillosas. 
                        </p>
                        <a href="donar.php" class="about-btn" target="_blank"><span>Donar ahora</span> 
                        <i class="bx bx-chevron-right"></i>
                        </a> 
                     </div>
                  </div>
                  
                  <div class="col-xl-7 d-flex align-items-stretch">
                     <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                           
                           <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                              <i class="ri-hearts-line"></i>
                              <h4>Misión</h4>
                              <p> Rescatar, curar, emparchar cuerpitos y almas y encontrarles los adopteros que se merecen. </p>
                           </div>
                           
                           <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                              <i class="ri-first-aid-kit-line"></i>
                              <h4>Atención veterinaria</h4>
                              <p> Nuestros perritos rescatados reciben toda la atención veterinaria posible , vacunas, castración, lo que necesiten. </p>
                           </div>
                           
                           <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                              <i class="ri-parent-line"></i>
                              <h4>¿Qué buscamos?</h4>
                              <p> Que cada uno de nuestros rescatados encuentre a su familia adoptera ideal, donde puedan recibir todo el amor y cuidado que merecen. </p>
                           </div>
                           
                           <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                              <i class="ri-chat-heart-line"></i>
                              <h4>Nuestro sueño</h4>
                              <p> Es que algún día no seamos necesarios, ni nosotros ni ningún grupo, porque todos tengan su casa, con amor, respeto y para siempre. </p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </section>
      </main>

      <main id="main" style="background-color: #e9e9e9;">
         
         <!-- Adopción y cuidado - ¿Cómo contribuir? -->
         <?php
         $contribuciones = Contribucion::All();
         ?>
         <section id="contribuir" class="tabs" style="padding-top: 100px;">
            <div class="container" data-aos="fade-up">
               <div class="tab-content">
                  <div class="tab-pane active show">
                     <div class="row">
                        
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                           <h3>¿Cómo contribuir?</h3>
                           <div class="text-line" style="width: 230px;"></div>
                           <br>
                           <p> Adoptando, difundiendo, creando conciencia, transitando, siendo voluntario/a, participando. Puedes ver opciones de donación en la sección "Donar", <a href="donar.php" target="_blank"><b> haz click aquí </b> 
                           </a> para ir a nuestra página de donación. </p>
                           <p> También necesitamos: </p>
                           <ul>
                              <?php
                                 foreach ($contribuciones as $row => $item) {
                                    # code...
                                 
                              ?>
                              <li> <i class="ri-check-fill"></i><?php echo $item->contribucion ?></li>
                              <!-- <li> <i class="ri-check-fill"></i>Balanceado de buena calidad para perros adultos y cachorros.</li> -->
                              <!-- <li> <i class="ri-check-fill"></i>Pipetas, Antiparasitarios, Curabichera, Platsul.</li>
                              <li> <i class="ri-check-fill"></i>Medicamentos veterinarios, Abrigos de todos los tamaños,</li>
                              <li> <i class="ri-check-fill"></i> Mantas, Correas, Collares, Platitos.</li> -->
                              <?php
                              }
                              ?>
                           </ul>
                           <p> ¡Tu ayuda significa mucho para nosotros y nuestros perritos! </p>
                        </div>

                        <div class="col-lg-5 offset-1 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200"> 
                           <img src="assets/img/img-1.png" class="img-fluid rounded"> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- Requisitos de adopción -->
         <section id="requisitos2"></section>
         <!-- <section id="requisitos2" class="" style="display:none;"></section> -->
         <section id="requisitos" class="requirements section-bg ">
            <div class="container" data-aos="fade-up">
               <div class="section-title">
                  <h2>Requisitos para Adoptar</h2>
                  <p>El proceso de adopción es simple, pero necesita de disposición, interés y cuidado.
                     <br> Estos son los requerimientos que todo adoptante debe considerar: 
                  </p>
               </div>
               <div class="row">
                  <?php  
                     $contador = 1;
                     $contador2 = -1;
                     $claseFill = "-fill";
                     $fill = true;
                     $requisitos = Requisito::All();
                     foreach ($requisitos as $row => $item) {
                        if ($contador == 1) {
                  ?>
                  <div class="col-md-6">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo $contador ?>00">
                        <i class="bi bi-check-square"></i>
                        <h4><?php echo $item->texto ?></h4>
                        <p><?php echo $item->subtexto ?></p>
                     </div>
                  </div>

                  <?php
                        } else {
                           if ($contador2 == 2) {
                              $contador2 = 0;
                              if ($claseFill == '-fill') {
                                 $claseFill = '';
                              } else {
                                 $claseFill = '-fill';
                              }
                           }

                           
                        ?>
                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo $contador ?>00">
                        <i class="bi bi-check-square<?php echo $claseFill; ?>"></i>
                        <h4><?php echo $item->texto ?></h4>
                        <p><?php echo $item->subtexto ?></p>
                     </div>
                  </div>
                        <?php 

                        }
                  $contador2++;
                  $contador++;
                     }
                  ?>
                  <!-- <div class="col-md-6">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-check-square"></i>
                        <h4>Entrevistas</h4>
                        <p>Realizar entrevistas previas</p>
                     </div>
                  </div>
                  
                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-check-square-fill"></i>
                        <h4>Mayoría de edad</h4>
                        <p>Ser mayor de 21 años</p>
                     </div>
                  </div>

                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-check-square-fill"></i>
                        <h4>Identificación</h4>
                        <p>DNI y servicio a nombre del adoptante constando domicilio</p>
                     </div>
                  </div>

                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-check-square"></i>
                        <h4>Zona de adopción</h4>
                        <p>Solo se da adopción en CABA</p>
                     </div>
                  </div>

                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-check-square"></i>
                        <h4>Adopción personal</h4>
                        <p>No se entregan perros para terceras personas</p>
                     </div>
                  </div>

                  <div class="col-md-6 mt-4 mt-md-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-check-square-fill"></i>
                        <h4>Consentimiento</h4>
                        <p>Todas las personas del hogar deben estar de acuerdo</p>
                     </div>
                  </div>
               </div> -->

               <!-- Esta queda por defecto -->
               <div class="col-md-12 mt-md-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                     <i class="bi bi-house-fill"></i>
                     <h4>Firma y seguimiento</h4>
                     <p>Se realiza firma de contrato de adopción y seguimiento</p>
                  </div>
               </div>
            </div>
         </section>

         <!-- FAQ -->
         <section id="faq" class="faq" style="margin-top: -30px;">
            <div class="container" data-aos="fade-up">
               <div class="section-title">
                  <h2>Preguntas frecuentes (FAQ)</h2>
               </div>
               <ul class="faq-list accordion" data-aos="fade-up">
                  <li>
                     <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">
                     ¿Cuáles son los perritos que puedo adoptar?
                     <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i>
                     </a>
                     <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p> Si deseas conocer a nuestros perritos en adopción a través de esta página puedes verlos en la sección de perros en adopción. <a href="perros-en-adopcion.php" target="_blank"><b> Haz click aquí para ir a Perros en Adopción</b> </a> </p>
                     </div>
                  </li>
                  <?php
                     $contador = 2;
                     $preguntas = Pregunta::All();
                     foreach ($preguntas as $row => $item) {
                  ?>
                  <li>
                     <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq<?php echo $contador ?>">
                     <!-- ¿Cómo y dónde puedo contactarlos para adoptar? -->
                     <?php echo $item->pregunta ?>
                     <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i>
                     </a>
                     <div id="faq<?php echo $contador ?>" class="collapse" data-bs-parent=".faq-list">
                        <p>
                           <?php echo $item->respuesta ?>
                           <!-- Todos los sábados hacemos Encuentros Adopteros de 15:00 - 18:00 horas, en Plaza TG. Emilio Mitre, Av. Pueyrredón y Av. Las Heras (CABA).
                           <br>
                           <br> También puedes llamarnos al: +54 11 4089-3717 (NO WHATSAPP) o contactarnos a través de nuestro email: adopterosargentina@gmail.com  -->
                        </p>
                     </div>
                  </li>
                  <?php
                     $contador++;
                     }
                     $contador = 0;
                  ?>
                  <!-- <li>
                     <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq3">
                     ¿Cómo puedo ser parte de Adopteros y contribuir?
                     <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i>
                     </a>
                     <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p> Adoptando, difundiendo, creando conciencia, transitando, siendo voluntario/a, participando, realizando una donación. </p>
                     </div>
                  </li> -->
               </ul>
            </div>
         </section>
      </main>

      <?php
         $info = InformacionContacto::GetAll();       
      ?>

      <!-- Footer -->
      <footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  
                  <!-- Datos de contacto -->
                  <div class="col-lg-3 offset-1 col-md-6 footer-contact">
                     <h3>Adopteros<span>.</span></h3>
                     <p>
                        <br> <strong>Teléfono: </strong><?= $info['telefono_upfoter']; ?>
                        <br> <strong>Email: </strong><?= $info['email']; ?>
                        <br> 
                     </p>
                  </div>
                  
                  <!-- Enlaces -->
                  <div class="col-lg-2 offset-3 col-md-6 footer-links">
                     <h4>Enlaces de utilidad</h4>
                     <ul>
                        <i class="bx bx-chevron-right"></i> <a href="inicio.php">Inicio</a>
                        <li><i class="bx bx-chevron-right"></i> <a href="donar.php">&nbsp;Donar</a></li>
                        <i class="bx bx-chevron-right"></i> <a href="perros-en-adopcion.php">Perros en adopción</a>
                        <li><i class="bx bx-chevron-right"></i> <a href="contacto.php">&nbsp;Contacto</a> </li>
                     </ul>
                  </div>
                 
                  <!-- Mapa -->
                  <!-- <div class="col-lg-6 col-md-6 footer-newsletter">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13138.54569057835!2d-58.3970969!3d-34.5880651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafc4c06da4f0d167!2sAdopteros%20Argentina!5e0!3m2!1sen!2sjp!4v1631593222641!5m2!1sen!2sjp" width="120%" height="160" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div> -->
               </div>
            </div>
         </div>

         <!-- Bottom -->
         <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
               <div class="copyright" style="padding-top: 10px"> &copy; Copyright <strong><span>Adopteros Argentina</span></strong>. <?= date('Y'); ?> All Rights Reserved </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
               <a href="<?= $info['instagram_link']; ?>" class="instagram" target="_blank"> <i class="bx bxl-instagram"></i> </a>
               <a href="<?= $info['twitter_link']; ?>" class="twitter" target="_blank"> <i class="bx bxl-twitter"></i> </a>
               <a href="<?= $info['facebook_link']; ?>" class="facebook" target="_blank"> <i class="bx bxl-facebook"></i> </a>
               <!-- <a href="https://www.youtube.com/channel/UCwjWHlJzbmYaIG6NLt2eTpQ/" class="youtube" target="_blank"> <i class="bx bxl-youtube"></i> </a> -->
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