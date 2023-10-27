<?php
require_once('assets/vendor/php/panel_de_control_auth.php');
require_once('assets/Model/perro.php');
require_once('assets/vendor/php/panel_de_control_crud_perros.php');
require_once('assets/vendor/php/panel_de_control_usuario.php');
require_once('assets/Model/usuario.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Adopteros Argentina - Panel de control</title>
   <link href="assets/img/icon.png" rel="icon">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/css/button.css" rel="stylesheet">
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
         <a href="panel-de-control.php" class="logo me-auto"><img src="assets/img/logo_texto.png"></a>
         <form action="" method="POST">
            <button class="get-started-btn" type="submit" name="btn_cerrar_sesion" style="border:none;">Cerrar
               sesión</button>
         </form>
      </div>
   </header>

   <?php
   # Perro registrado con éxito
   if ($perro_registrado_con_exito == true) {
      echo "<script> Swal.fire({icon:'success',               
                    title:'¡Completado!',                
                    text:'Nuevo perro en adopción registrado con éxito',                
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});              
                  </script>";
   }

   # Usuario registrado con éxito
   else if ($usuario_registrado_con_exito == true) {
      echo "<script> Swal.fire({icon:'success',               
                      title:'¡Completado!',                
                      text:'Nueva cuenta de usuario registrada con éxito',                
                      confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});               
                  </script>";
   }

   # Contraseña de editor actualizada con éxito
   else if ($editor_password_editado_con_exito == true) {
      echo "<script> Swal.fire({icon:'success',
                    title:'¡Completado!',                
                    text:'Contraseña actualizada con éxito',                
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});               
                  </script>";
   }

   # Actualización de Contraseña de editor fallida
   else if ($editor_password_editado_fallida == true) {
      echo "<script> Swal.fire({icon:'error',                
                    title:'¡Oops!',               
                    text:'Las credenciales ingresadas no coinciden',               
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});              
                  </script>";
   }
   ?>

   <!-- Main Content -->
   <main id="main" style="background-color: #1b1b1b;">

      <!-- Panel de control -->
      <section id="panel_de_control" class="about section-bg" style="padding-top: 80px; padding-bottom: 0px;">
         <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
               <div class="content col-xl-5 d-flex align-items-stretch">
                  <div class="content">
                     <h3>Panel de control</h3>
                     <p>
                        Bienvenido/a a tu espacio de control y gestión de contenido, desde esta herramienta
                        puedes crear, eliminar, modificar y publicar registros de datos<br>
                     </p>
                     <a href="perros-en-adopcion.php" class="about-btn" target="_blank">
                        <span>Ver perros en adopción</span> <i class="bx bx-chevron-right"></i>
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
                              Este es el grupo de usuario al que perteneces, todas las tareas por realizar en
                              este
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

   <main id="main" style="background-color: #e9e9e9;">
      <section id="tabs" class="tabs" style="padding-top: 50px;">
         <div class="container" data-aos="fade-down">
            <ul class="nav nav-tabs row d-flex">

               <!-- 1. ADMIN, EDITOR / Gestión - Perros en adopción -->
               <li class="nav-item col-4">
                  <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#gestion_perros_adopcion">
                     <h4 class="d-none d-lg-block">Gestión de Perros en adopción</h4>
                  </a>
               </li>

               <!-- 2. ADMIN / Gestión - Usuarios -->
               <?php if ($_SESSION['auth'] == 1) { ?>
                  <li class="nav-item col-4">
                     <a class="nav-link" data-bs-toggle="tab" data-bs-target="#gestion_usuarios">
                        <h4 class="d-none d-lg-block">Gestión de Usuarios</h4>
                     </a>
                  </li>
               <?php } else { ?>

                  <!-- 3. EDITOR / Gestión - Cuenta -->
                  <li class="nav-item col-4">
                     <a class="nav-link" data-bs-toggle="tab" data-bs-target="#gestion_cuenta">
                        <h4 class="d-none d-lg-block">Gestión de Cuenta</h4>
                     </a>
                  </li>
               <?php } ?>

               <!-- 4. ADMIN, EDITOR / PDF - Guía de usuario -->
               <li class="nav-item col-4">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#guia_usuario">
                     <h4 class="d-none d-lg-block">Guía de Usuario</h4>
                  </a>
               </li>
            </ul>

            <div class="tab-content">

               <!-- 1. ADMIN, EDITOR / Gestión - Perros en adopción -->

               <div class="tab-pane active show" id="gestion_perros_adopcion">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <!-- GESTIÓN DE PERROS AQUÍ -->

                     <!-- Registro de perritos -->
                     <!-- <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;" enctype="multipart/form-data">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Registro de mascotas
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                           <div class="col-xl-3 mb-3">
                              <label style="padding-bottom: 10px;">Nombre:</label>
                              <input type="text" maxlength="24" name="txt_name" class="form-control text-center" placeholder="Nombre de perro...">
                           </div>
                           <div class="col-xl-2 mb-3">
                              <label style="padding-bottom: 10px;">Años:</label>
                              <input type="number" min="0" max="30" name="txt_edad" class="form-control text-center" placeholder="0">
                           </div>
                           <div class="col-xl-2 mb-3">
                              <label style="padding-bottom: 10px;">Meses:</label>
                              <input type="number" min="0" max="11" name="txt_edad_meses" class="form-control text-center" placeholder="0">
                           </div>
                           <div class="col-xl-3 mb-3">
                              <label style="padding-bottom: 14px;">Fotografía:</label>
                              <input type="file" class="form-control-file" name="photo">
                           </div>
                           <div class="form-group">
                              <label class=" mb-3" for="description">Descripción:</label>
                              <textarea class="form-control" name="description" maxlength="400" rows="3"></textarea>
                           </div>
                           <div class="col-xl-3 mb-3">
                              <button type="submit" name="btn_registrar" class="btn login-btn" value="savepupie" style="margin-top: 32px;">
                                 Guardar mascota
                              </button><br>
                           </div>
                        </div>
                     </form> -->

                     <!--vista de perros-->
                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Lista de perros en adopcion
                        </h5>
                        <br>
                        <?php
                        $datos = Perro::Resume();
                        // var_dump($datos['adoptados'][0]);
                        ?>
                        <h3>Adoptados: <b><?php echo $datos['adoptados']; ?></b>,
                           En busca de un hogar:
                           <b><?php echo $datos['noadoptados']; ?></b>, Total:
                           <b><?php echo $datos['total']; ?></b>
                        </h3>
                        <table class="table table-striped table-bordered" style="text-align: center;">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Nombre</th>
                                 <th>Años</th>
                                 <th>Meses</th>
                                 <th>Estado</th>
                                 <th>Descripcion</th>
                                 <th>Foto</th>
                                 <th>Acciones</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php
                              $tabla = Perro::All();
                              foreach ($tabla as $row => $item) {
                              ?>

                                 <tr>
                                    <td scope="row" style="vertical-align: middle;">
                                       <?php echo $item->id; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                       <?php echo $item->nombre; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                       <?php echo $item->edad; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                       <?php echo $item->edad_meses; ?>
                                    </td>
                                    <!-- <td style="vertical-align: middle;"> -->
                                    <?php
                                    // echo "<td style=\"vertical-align: middle;\">";
                                    if ($item->adoptado == 0) {
                                       echo "<td style=\"vertical-align: middle; background-color: #ed8291;\">";
                                       echo "<img src=\"assets/img/dog-no.png\" alt=\"\" height=\"75px\">";
                                    } else {
                                       echo "<td style=\"vertical-align: middle;  background-color: #8ae69d;\">";
                                       echo "<img src=\"assets/img/dog-yes.png\" alt=\"\" height=\"75px\">";
                                    }
                                    ?>
                                    </td>
                                    <td style="vertical-align: middle; word-wrap: break-word;">
                                       <?php echo $item->descripcion; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                       <img src="<?php echo $item->fotografia ?>" alt="" height="75px">
                                    </td>
                                    <td style="vertical-align: middle;">
                                       <div class="btn-group" role="group" aria-label="">
                                          <a href="assets/vendor/php/panel_de_control_options.php?action=cambiar&id=<?php echo $item->id; ?>" type="submit" class="btn btn-outline-secondary" name="btnBorrar"><?php echo ($item->adoptado == 0) ? "Adoptado" : "Acoger"; ?></a>
                                          <a href="EditPuppie.php?id=<?php echo $item->id; ?>" type="button" name="btn-" class="btn btn-outline-success">Editar</a>
                                          <a href="assets/vendor/php/panel_de_control_delete.php?action=borrar&id=<?php echo $item->id; ?>" type="submit" class="btn btn-outline-danger" name="btnBorrar">Borrar</a>
                                       </div>
                                    </td>
                                 </tr>
                              <?php } ?>

                           </tbody>
                        </table>
                     </form>

                  </div>
               </div>

               <!-- 2. ADMIN / Gestión - Usuarios -->
               <?php if ($_SESSION['auth'] == 1) { ?>
                  <div class="tab-pane" id="gestion_usuarios">
                     <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                        <!-- GESTIÓN DE USUARIOS AQUÍ -->

                        <!-- Registro de usuarios -->
                        <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                           <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                              Registro de usuarios
                           </h5>
                           <br>
                           <div class="row" style="padding-left: 30px">
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Usuario:</label>
                                 <input type="text" name="txt_username" class="form-control text-center" placeholder="Nombre de usuario..." maxlength="16">
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Password:</label>
                                 <input type="password" name="txt_password" class="form-control text-center" placeholder="Contraseña de usuario..." maxlength="16">
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Grupo:</label>
                                 <select class="form-control text-center" type="input" name="select_group">
                                    <option value="1">Administrador</option>
                                    <option value="0">Editor</option>
                                 </select>
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <button type="submit" name="btn_registrar_usuario" class="btn login-btn" style="margin-top: 32px;">
                                    Guardar usuario
                                 </button><br>
                              </div>
                           </div>
                        </form>

                        <!-- Vista de usuarios -->
                        <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                           <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                              Cuentas de usuario
                           </h5>
                           <br>
                           <table class="table table-striped table-bordered" style="text-align: center;">
                              <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Grupo</th>
                                    <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <?php
                                 $Usuarios  = Usuario::Get();
                                 foreach ($Usuarios as $usuario) {
                                 ?>

                                    <tr>
                                       <td style="vertical-align: middle;"><?php echo $usuario->id ?></td>
                                       <td style="vertical-align: middle;"><?php echo $usuario->username ?></td>
                                       <td style="vertical-align: middle;"><?php
                                                                           if ($usuario->auth == 1) {
                                                                              echo "Administrador";
                                                                           } else {
                                                                              echo "Editor";
                                                                           }
                                                                           ?></td>
                                       <td style="vertical-align: middle;">
                                          <div class="btn-group" role="group" aria-label="">
                                             <a href="EditUser.php?id=<?php echo $usuario->id; ?>" type="button" name="btn-" class="btn btn-outline-success">Editar</a>
                                             <a href="assets/vendor/php/panel_de_control_usuario.php?action=borrarU&id=<?php echo $usuario->id; ?>" type="submit" class="btn btn-outline-danger" name="btnBorrar">Borrar</a>
                                          </div>
                                       </td>
                                    </tr>
                                 <?php } ?>

                              </tbody>
                           </table>
                        </form>

                     </div>
                  </div>

               <?php } else { ?>

                  <!-- 3. EDITOR / Gestión - Cuenta -->
                  <div class="tab-pane" id="gestion_cuenta">
                     <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                        <!-- GESTIÓN DE CUENTA AQUÍ -->

                        <!-- Modificación de password -->
                        <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                           <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                              Actualización de contraseña
                           </h5>
                           <br>
                           <div class="row" style="padding-left: 30px">
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Password:</label>
                                 <input type="password" name="txt_current_password_ed" class="form-control text-center" placeholder="Contraseña actual..." maxlength="16">
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Nueva password:</label>
                                 <input type="password" name="txt_new_password_ed" class="form-control text-center" placeholder="Nueva contraseña..." maxlength="16">
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <label style="padding-bottom: 10px;">Reingrese nueva password:</label>
                                 <input type="password" name="txt_password_check_ed" class="form-control text-center" placeholder="Nueva contraseña..." maxlength="16">
                                 <input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="username">
                              </div>
                              <div class="col-xl-3 mb-3">
                                 <button type="submit" name="btn_cambiar_password_ed" class="btn login-btn" style="margin-top: 32px;">
                                    Actualizar password
                                 </button><br>
                              </div>
                           </div>
                        </form>

                     </div>
                  </div>

               <?php } ?>

               <!-- 4. ADMIN, EDITOR / PDF - Guía de usuario -->
               <div class="tab-pane" id="guia_usuario">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">
                     <iframe src="assets/Guia-de-Usuario.pdf" width="100%" height="500px">
                     </iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-- Footer -->
   <footer id="footer">
      <div class="container d-md-flex py-4">
         <div class="me-md-auto text-center text-md-start">
            <div class="copyright" style="padding-top: 10px;">
               &copy; Copyright <strong><span>Adopteros Argentina</span></strong>. 2022 All Rights Reserved
            </div>
         </div>
      </div>
   </footer>

   <!-- Go top -->
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
   </a>

   <!-- Add Dog -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <div class="floating-container">
      <div class="floating-button" id="my-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+</div>
   </div>



   <!-- Modal -->
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
            <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;" enctype="multipart/form-data">
               <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                  Registro de mascotas
                  <button type="button" class="btn btn-danger offset-8" data-bs-dismiss="modal">X</button>
               </h5>
               
               <br>
               <div class="row" style="padding-left: 30px">
                  <div class="col-xl-3 mb-3">
                     <label style="padding-bottom: 10px;">Nombre:</label>
                     <input type="text" maxlength="24" name="txt_name" class="form-control text-center" placeholder="Nombre de perro...">
                  </div>
                  <div class="col-xl-2 mb-3">
                     <label style="padding-bottom: 10px;">Años:</label>
                     <input type="number" min="0" max="30" name="txt_edad" class="form-control text-center" placeholder="0">
                  </div>
                  <div class="col-xl-2 mb-3">
                     <label style="padding-bottom: 10px;">Meses:</label>
                     <input type="number" min="0" max="11" name="txt_edad_meses" class="form-control text-center" placeholder="0">
                  </div>
                  <div class="col-xl-3 mb-3">
                     <label style="padding-bottom: 14px;">Fotografía:</label>
                     <input type="file" class="form-control-file" name="photo">
                  </div>
                  <div class="form-group">
                     <label class=" mb-3" for="description">Descripción:</label>
                     <textarea class="form-control" name="description" maxlength="400" rows="3"></textarea>
                  </div>
                  <div class="col-xl-3 mb-3">
                     <button type="submit" name="btn_registrar" class="btn login-btn" value="savepupie" style="margin-top: 32px;">
                        Guardar mascota
                     </button><br>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="assets/js/button.js"></script>

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