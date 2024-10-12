<?php
   require_once('assets/vendor/php/panel_de_control_auth.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Editar datos de Perro</title>
      <link href="assets/img/icon.png" rel="icon">
      
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
      
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   </head>
   <body>

        <!-- Header -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            <img src="assets/img/logo_icono.png" style="width: 45px; padding-bottom:6px;">
            <a href="panel-de-control.php" class="logo me-auto"><img src="assets/img/logo_texto.png"></a>
            <form action="" method="POST">
                <button class="get-started-btn" type="submit" name="btn_cerrar_sesion" style="border:none;">Cerrar sesión</button>
            </form>
            </div>
        </header>
      
        <!-- Main Content -->
        <main id="main" style="background-color: #1b1b1b;">
            
            <!-- Panel de control -->
            <section id="panel_de_control" class="about section-bg" style="padding-top: 80px; padding-bottom: 0px;">
            <div class="container" data-aos="fade-up">
                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                        <h3>Edición de datos</h3>
                        <p>
                            En esta sección puedes consultar y editar datos disponibles de perros 
                            en adopción actualmente registrados
                            en el sistema<br>
                        </p>
                        <a href="panel-de-control.php" class="about-btn">
                        <span>Regresar a Panel de control</span> <i class="bx bx-chevron-right"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch" style="margin-top: -50px;">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-account-circle-line"></i>
                                <h4>Usuario activo:</h4>
                                <h4><?php echo $_SESSION['username'] ?></h4>
                                <p>
                                    Asegurate de cerrar la sesión <br>actual cuando decidas
                                    concluir<br> tus tareas en el panel de control
                                </p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-edit-2-line"></i>
                                <h4>Nivel de autorización:</h4>
                                <h4><?php echo ($_SESSION['auth'] == 1) ? 'Administrador' : 'Editor'; ?></h4>
                                <p>
                                    Este es el grupo de usuario al que perteneces, todas las tareas por realizar en este
                                    espacio se encuentran autorizadas
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>
      
        <main id="main" style="background-color: #e9e9e9; margin-bottom:-40px;">
            <section id="tabs" class="tabs" style="padding-top: 20px;">
                <div class="container" data-aos="fade-down">
                <div style="padding-top: 20px; padding-bottom: 0px;">
                    <?php
                        require_once("assets/Model/perro.php");                       
                        require_once("assets/Connection/database.php");                      
                        require_once("assets/vendor/php/editPuppieControl.php");      
                        
                        $id = $_GET['id'];      
                        $perro = Perro::GetById($id);   
                    ?>

                    <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;" enctype="multipart/form-data">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                            padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                            background-color: #1b1b1b; color:white;">
                            Detalles de Perro en adopción
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                            <div class="col-xl-1 mb-1">
                            <label style="padding-bottom: 10px;">ID:</label>
                            <input type="text" class="form-control text-center" 
                                value="<?php echo $perro->id ?>" placeholder="Nombre de mascota..." disabled>
                            </div>
                            <div class="col-xl-3 mb-3">
                            <label style="padding-bottom: 10px;">Nombre:</label>
                            <input type="hidden" value="<?php echo $perro->id ?>" name="id">
                            <input type="text" name="txt_name" maxlength="24"
                                class="form-control text-center" 
                                value="<?php echo $perro->nombre ?>" placeholder="Nombre de mascota..." 
                                required>
                            </div>
                            <div class="col-xl-2 mb-2">
                            <label style="padding-bottom: 10px;">Años:</label>
                            <input type="number" min="0" max="30" name="txt_edad" 
                                class="form-control text-center" 
                                value="<?php echo $perro->edad ?>" placeholder="0" required>
                            </div>
                            <div class="col-xl-2 mb-2">
                            <label style="padding-bottom: 10px;">Meses:</label>
                            <input type="number" name="txt_edad_meses" min="0" max="11"
                                class="form-control text-center" 
                                value="<?php echo $perro->edad_meses ?>" placeholder="0" required>
                            </div>
                            <div class="col-xl-12 mb-4">
                            <br>
                            <label style="padding-bottom: 10px;">Fotografía:</label><br>
                            <img class="img rounded" height="150px"
                                src=" <?php echo $perro->fotografia ?>" alt="">
                            </div>
                            <div class="col-xl-3 mb-4">
                            <input type="file" class="form-control-file" name="photo" required>
                            </div>
                            <div class="form-group" style="padding-right: 60px;">
                            <br>
                            <label for="description" class="mb-3">Descripción: </label>
                            <textarea class="form-control" name="description" maxlength="400"
                                value="" rows="3" required><?php echo $perro->descripcion ?></textarea>
                            </div>
                            <div class="col-xl-3 mb-3">
                            <button type="submit" name="btn_actualizar" class="btn login-btn" value="savepupie" style="margin-top: 32px;">
                                Actualizar datos y publicar
                            </button><br>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </section>
       </main>

      <!-- Footer -->
      <footer id="footer">
         <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
               <div class="copyright" style="padding-top: 10px;">
                  &copy; Copyright <strong><span>Adopteros Argentina</span></strong>. <?= date('Y'); ?> All Rights Reserved
               </div>
            </div>
         </div>
      </footer>

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