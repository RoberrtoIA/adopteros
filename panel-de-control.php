<?php
require_once('assets/vendor/php/panel_de_control_auth.php');
require_once('assets/Model/perro.php');
require_once('assets/vendor/php/panel_de_control_crud_perros.php');
require_once('assets/vendor/php/panel_de_control_usuario.php');
require_once('assets/Model/usuario.php');
require_once('assets/Model/donacion.php');
require_once('assets/vendor/php/panel_de_control_crud_donaciones.php');
require_once('assets/Model/informacion_contacto.php');
require_once('assets/vendor/php/panel_de_control_informacion_contacto.php');
require_once('assets/vendor/php/panel_de_control_crud_preguntas.php');
require_once('assets/vendor/php/panel_de_control_crud_requisitos.php');

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

   # Donacion registrada con éxito
   if ($donacion_registrado_con_exito == true) {
      echo "<script> Swal.fire({icon:'success',               
                    title:'¡Completado!',                
                    text:'Nuevo enlace agregado con éxito',                
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});              
                  </script>";
   }

   # Info contacto actualizada con éxito
   if ($info_contacto_editada_con_exito == true) {
      echo "<script> Swal.fire({icon:'success',               
                    title:'¡Completado!',                
                    text:'Información de contacto actualizada con éxito',                
                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});              
                  </script>";
   }

      # Pregunta registrada con exito
      if ($pregunta_registrada_con_exito == true) {
         echo "<script> Swal.fire({icon:'success',               
                       title:'¡Completado!',                
                       text:'Nueva pregunta agregada',                
                       confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});              
                     </script>";
      }

      # Requisito registrado con exito
      if ($requisito_registrado_con_exito == true) {
         echo "<script> Swal.fire({icon:'success',               
                       title:'¡Completado!',                
                       text:'Nuevo requisito agregado',                
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
               <li class="nav-item col-3">
                  <a class="nav-link active show" id="a1" data-bs-toggle="tab" data-bs-target="#gestion_perros_adopcion">
                     <h4 class="d-none d-lg-block">Gestión de Perros en adopción</h4>
                  </a>
               </li>

               <!-- 2. ADMIN / Gestión - Usuarios -->
               <?php if ($_SESSION['auth'] == 1) { ?>
                  <li class="nav-item col-3">
                     <a class="nav-link" id="a2" data-bs-toggle="tab" data-bs-target="#gestion_usuarios">
                        <h4 class="d-none d-lg-block">Gestión de Usuarios</h4>
                     </a>
                  </li>
               <?php } else { ?>

                  <!-- 3. EDITOR / Gestión - Cuenta -->
                  <li class="nav-item col-3">
                     <a class="nav-link" id="a3" data-bs-toggle="tab" data-bs-target="#gestion_cuenta">
                        <h4 class="d-none d-lg-block">Gestión de Cuenta</h4>
                     </a>
                  </li>
               <?php } ?>

               <!-- 4. ADMIN, EDITOR / PDF - Guía de usuario -->
               <li class="nav-item col-3">
                  <a class="nav-link" id="a4" data-bs-toggle="tab" data-bs-target="#guia_usuario">
                     <h4 class="d-none d-lg-block">Guía de Usuario</h4>
                  </a>
               </li>

               <!-- 5. ADMIN Gestión de Donaciones -->
               <li class="nav-item col-3">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_donacion">
                     <h4 class="d-none d-lg-block">Gestión de Donaciones</h4>
                  </a>
               </li>

               <!-- 6. Gestión - Información de Contacto -->
               <li class="nav-item col-3" style="margin-top:16px">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_contacto">
                     <h4 class="d-none d-lg-block">Información de Contacto</h4>
                  </a>
               </li>

               <!-- 7. Gestión - Inicio -->
               <li class="nav-item col-3" style="margin-top:16px">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_landing">
                     <h4 class="d-none d-lg-block">Portada</h4>
                  </a>
               </li>

               <!-- 8. Gestión - También necesitamos -->
               <li class="nav-item col-3" style="margin-top:16px">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_adopcion_cuidados">
                     <h4 class="d-none d-lg-block">También necesitamos</h4>
                  </a>
               </li>

               <!-- 9. Gestión - Requisitos para adoptar -->
               <li class="nav-item col-3" style="margin-top:16px">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_adoptar">
                     <h4 class="d-none d-lg-block">Requisitos para Adoptar</h4>
                  </a>
               </li>

               <!-- 10. Gestión - FAQ -->
               <li class="nav-item col-3" style="margin-top:16px">
                  <a class="nav-link" id="a5" data-bs-toggle="tab" data-bs-target="#gestion_faq">
                     <h4 class="d-none d-lg-block">FAQ</h4>
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
                                       echo "<td style=\"vertical-align: middle;\">";
                                       // echo "<img src=\"assets/img/x.png\" alt=\"\" height=\"75px\">";
                                       echo '<span style="color: blue;">●</span>';
                                       echo '&nbsp;&nbsp;&nbsp;';
                                       echo 'Disponible';
                                       echo '&nbsp;&nbsp;';
                                    } else {
                                       echo "<td style=\"vertical-align: middle;\">";
                                       echo '<span style="color: green;">●</span>';
                                       echo '&nbsp;&nbsp;&nbsp;';
                                       echo 'Adoptad@';
                                       echo '&nbsp;&nbsp;';
                                       // echo "<img src=\"assets/img/check-mark.png\" alt=\"\" height=\"75px\">";
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
                                          <?php

                                          if ($item->adoptado == 0) {
                                             echo "<a href=\"assets/vendor/php/panel_de_control_options.php?action=cambiar&id=" . $item->id . "\" type=\"submit\" class=\"\" name=\"btnBorrar\">
                                             <img src=\"assets/img/eye.png\" alt=\"active_button\" height=\"35px\"></a>";
                                          } else {
                                             echo "<a href=\"assets/vendor/php/panel_de_control_options.php?action=cambiar&id=" . $item->id . "\" type=\"submit\" class=\"\" name=\"btnBorrar\">
                                             <img src=\"assets/img/blind.png\" alt=\"inactive_button\" height=\"35px\"></a>";
                                          }

                                          ?>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <a href="EditPuppie.php?id=<?php echo $item->id; ?>" type="button" name="btn-" class=""><img src="assets/img/edit.png" alt="edit_button" height="35px"></a>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <a href="assets/vendor/php/panel_de_control_delete.php?action=borrar&id=<?php echo $item->id; ?>" onclick="confirm('¿Estas segur@?')" type="submit" class="" name="btnBorrar"><img style="transform: translate(0%, 10%);" src="assets/img/delete.png" alt="delete_button" height="30px"></a>
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
                     <iframe src="assets/Guia-de-Usuario.pdf" width="100%" height="900px">
                     </iframe>
                  </div>
               </div>

               <!-- 5. ADMIN / Gestion de Donaciones -->

               <div class="tab-pane" id="gestion_donacion">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <!-- GESTIÓN DE USUARIOS AQUÍ -->

                     <!-- Registro de usuarios -->
                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Agregar donación
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px;">URL:</label>
                              <input type="text" name="txt_url" class="form-control text-center" placeholder="URL de donación..." maxlength="300">
                           </div>
                           <div class="col-xl-3 mb-3">
                              <label style="padding-bottom: 10px;">Monto:</label>
                              <input type="text" name="txt_monto" class="form-control text-center" placeholder="Monto de la donación..." maxlength="16">
                           </div>
                           <div class="col-xl-3 mb-3">
                              <button type="submit" name="btn_registrar_donacion" class="btn login-btn" value="savepupie" style="margin-top: 32px;">
                                 Guardar enlace
                              </button>
                           </div>
                        </div>
                        <div class="row" style="padding-left: 30px">
                           <span style="font-style: italic;">La <b>$</b> se agregará automaticamente al final del monto.</span>
                           <span style="font-style: italic;">PD! El primer enlace debe ser "Débito Automático" por tener
                              estilos exclusivos de un texto</span>
                        </div>
                     </form>

                     <!-- Vista de usuarios -->
                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Panel de donaciones
                        </h5>
                        <br>
                        <table class="table table-striped table-bordered" style="text-align: center;">
                           <thead>
                              <tr>
                                 <th>URL</th>
                                 <th>Monto</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php
                              $donaciones  = Donacion::All();
                              foreach ($donaciones as $donacion) {
                              ?>

                                 <tr>
                                    <td style="vertical-align: middle;"><a href="<?php echo $donacion->url ?>" target="_blank"><?php echo $donacion->url ?></a></td>
                                    <td style="vertical-align: middle;"><?php echo $donacion->monto ?></td>
                                    <td style="vertical-align: middle;">
                                       <div class="btn-group" role="group" aria-label="">
                                          <a href="EditDonation.php?id=<?php echo $donacion->id; ?>" type="button" name="btn-" class="btn btn-outline-success">Editar</a>
                                          <a href="assets/vendor/php/panel_de_control_crud_donaciones.php?action=borrar&id=<?php echo $donacion->id; ?>" type="submit" class="btn btn-outline-danger" name="btnBorrar">Borrar</a>
                                       </div>
                                    </td>
                                 </tr>
                              <?php } ?>

                           </tbody>
                        </table>
                     </form>

                  </div>
               </div>

               <!-- 6. Gestión - Información de Contacto -->

               <?php
               $info = InformacionContacto::GetAll();
               ?>

               <div class="tab-pane" id="gestion_contacto">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Configuración basica de contacto
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                           <div class="col-xl-3 mb-3">
                              <label style="padding-bottom: 10px;">Teléfono:</label>
                              <input type="text" name="txt_telefono" class="form-control text-center" placeholder="Teléfono" maxlength="60" value="<?= $info['telefono_upfoter']; ?>">
                           </div>
                           <div class="col-xl-4 mb-4">
                              <label style="padding-bottom: 10px;">Email</label>
                              <input type="text" name="txt_email" class="form-control text-center" placeholder="Email" maxlength="60" value="<?= $info['email']; ?>">
                           </div>
                           <div class="col-xl-5 mb-5">
                              <label style="padding-bottom: 10px;">Link de Instagram:</label>
                              <input type="text" name="txt_instagram" class="form-control text-center" placeholder="Link de Instagram" maxlength="200" value="<?= $info['instagram_link']; ?>">
                           </div>
                           <div class="col-xl-5 mb-5">
                              <label style="padding-bottom: 10px;">Link de Twitter:</label>
                              <input type="text" name="txt_twitter" class="form-control text-center" placeholder="Link de Twitter" maxlength="200" value="<?= $info['twitter_link']; ?>">
                           </div>
                           <div class="col-xl-5 mb-5">
                              <label style="padding-bottom: 10px;">Link de Facebook:</label>
                              <input type="text" name="txt_facebook" class="form-control text-center" placeholder="Link de Facebook" maxlength="200" value="<?= $info['facebook_link']; ?>">
                           </div>
                           <div class="col-xl-2 mb-2">
                              <button type="submit" name="btn_actualizar_info_contacto" class="btn login-btn" style="margin-top: 32px;">
                                 Actualizar datos
                              </button><br>
                           </div>
                        </div>
                     </form>

                  </div>
               </div>

               <!-- 7. Gestión - Inicio -->

               <div class="tab-pane" id="gestion_landing">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Configuración de Portada
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                           <h3>Inicio</h3>
                           <div class="col-xl-12 mb-12">
                              <label style="padding-bottom: 10px;">Titulo de bienvenida:</label>
                              <input type="text" name="txt_telefono" class="form-control text-center" placeholder="Titulo" maxlength="200" value="¡Adopta a tu nuevo mejor amigo hoy!">
                           </div>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Subtitulo de bienvenida:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_telefono" class="form-control text-center" placeholder="Parrafo/Subtitulo" maxlength="500" value="Adopta un amigo.">Adopta un amigo.</textarea>
                           </div>
                           <div class="col-xl-4 mb-4">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Botón-Ver perros:</label>
                              <input type="text" name="txt_telefono" class="form-control text-center" placeholder="Ver perros" maxlength="200" value="Ver perros en adopción">
                           </div>
                           <h3 style="padding-top: 20px;">Acerca de nosotros</h3>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Parrafo *Acerca de nosotros*:</label>
                              <textarea type="text" style="height: 20vh;" name="txt_telefono" class="form-control text-center" placeholder="Parrafo" maxlength="500" value="">Somos un grupo de personas que rescata, recupera y da en adopción a perros que han sido abandonados o maltratados

Los curamos, les damos atención veterinaria y luego buscamos que sean adoptados por familias maravillosas.</textarea>
                           </div>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Misión:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_telefono" class="form-control text-center" placeholder="Mision" maxlength="500" value="Ver perros en adopción"></textarea>
                           </div>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">¿Qué buscamos?:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_telefono" class="form-control text-center" placeholder="¿Qué buscamos?" maxlength="500" value="Ver perros en adopción"></textarea>
                           </div>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Atención veterinaria:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_telefono" class="form-control text-center" placeholder="Atención veterinaria" maxlength="500" value="Ver perros en adopción"></textarea>
                           </div>
                           <div class="col-xl-6 mb-6">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Nuestro sueño:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_telefono" class="form-control text-center" placeholder="Nuestro sueño" maxlength="500" value="Ver perros en adopción"></textarea>
                           </div>
                           <div class="col-xl-2 mb- offset-3">
                              <button type="submit" name="btn_actualizar_info_contacto" class="btn login-btn" style="margin-top: 52px;">
                                 Actualizar Landing
                              </button><br>
                           </div>
                        </div>
                  </div>

               </div>

               <!-- 8. Gestión - Adopción y cuidados -->

               <div class="tab-pane" id="gestion_adopcion_cuidados">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Adopción | Cuidados
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">

                           <div class="col-xl-8 mb-8">
                              <label style="padding-bottom: 10px; padding-top: 15px;">También necesitamos:</label>
                              <table class="table table-striped table-bordered" style="text-align: center;">
                                 <thead>
                                    <tr>
                                       <!-- <th>Texto</th> -->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <td style="vertical-align: middle;">Balanceado de buena calidad para perros adultos y cachorros.</td>
                                 </tbody>
                              </table>
                           </div>

                           <div class="col-xl-2 mb-2">
                              <button type="submit" name="btn_agregar_item_contribuir" class="btn login-btn" style="margin-top: 52px; background-color:#1b1b1b">
                                 Agregar item
                              </button><br>
                           </div>
                        </div>
                  </div>
                  </form>

               </div>

               <!-- 9. Gestión - Requisitos para adoptar -->

               <div class="tab-pane" id="gestion_adoptar">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">

                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">
                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Requisitos
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                        <table class="table table-striped table-bordered" style="text-align: center;">
                              <thead>
                                 <tr>
                                    <th>Texto</th>
                                    <th>Sub-texto</th>
                                    <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $tablaRequisitos = Requisito::All();
                                 foreach ($tablaRequisitos as $row => $item) {
                                 ?>
                                 <tr>
                                    <td style="vertical-align: middle;">
                                    <?php echo $item->texto ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <?php echo $item->subtexto ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <a href="EditRequisito.php?action=editar&id=<?php echo $item->id; ?>" type="button" name="btn-" class=""><img src="assets/img/edit.png" alt="edit_button_requisito" height="35px"></a>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="assets/vendor/php/panel_de_control_crud_requisitos.php?action=borrar&id=<?php echo $item->id; ?>" onclick="confirm('¿Estas segur@?')" type="submit" class="" name="btnBorrar"><img style="transform: translate(0%, 10%);" src="assets/img/delete.png" alt="delete_button" height="30px"></a>
                                    </td>
                                 </tr>
                                 <?php
                                    } 
                                 ?>
                              </tbody>
                           </table>
                           <div class="col-xl-10 mb-10">
                              <label style="padding-bottom: 10px;">Texto:</label>
                              <input type="text" name="txt_texto" class="form-control text-center" placeholder="Texto" maxlength="200">
                           </div>
                           <div class="col-xl-10 mb-10">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Sub-texto:</label>
                              <input type="text" style="height: 10vh;" name="txt_subtexto" class="form-control text-center" placeholder="Sub-texto" maxlength="1000"></input>
                           </div>
                           <div class="col-xl-2 mb-2">
                              <button type="submit" name="btn_agregar_requisito" class="btn login-btn" style="margin-top: 52px; background-color:#1b1b1b">
                                 Agregar requisito
                              </button><br>
                           </div>
                        </div>
                  </div>
                  </form>

               </div>

               <!-- 10. Gestión - FAQ -->

               <div class="tab-pane" id="gestion_faq">
                  <div class="container" style="padding-top: 40px; padding-bottom: 20px;">
                     <form class="shadow p-3 mb-5 bg-white rounded" action="" method="POST" style="padding: 30px 30px;">

                        <h5 style="margin-top:-16px; margin-left: -16px; margin-right: -16px;
                              padding-bottom:15px; padding-top: 15px; padding-left:30px; 
                              background-color: #1b1b1b; color:white;">
                           Preguntas frecuentes (FAQ)
                        </h5>
                        <br>
                        <div class="row" style="padding-left: 30px">
                           <table class="table table-striped table-bordered" style="text-align: center;">
                              <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Pregunta</th>
                                    <th>Respuesta</th>
                                    <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $tablaPreguntas = Pregunta::All();
                                 foreach ($tablaPreguntas as $row => $item) {
                                 ?>
                                 <tr>
                                    <td scope="row" style="vertical-align: middle;">
                                    <?php echo $item->id ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <?php echo $item->pregunta ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <?php echo $item->respuesta ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <a href="assets/vendor/php/panel_de_control_crud_preguntas.php?action=borrar&id=<?php echo $item->id; ?>" onclick="confirm('¿Estas segur@?')" type="submit" class="" name="btnBorrar"><img style="transform: translate(0%, 10%);" src="assets/img/delete.png" alt="delete_button" height="30px"></a>
                                    </td>
                                 </tr>
                                 <?php
                                    } 
                                 ?>
                              </tbody>
                           </table>
                           <div class="col-xl-10 mb-10">
                              <label style="padding-bottom: 10px;">Pregunta:</label>
                              <input type="text" name="txt_pregunta" class="form-control text-center" placeholder="¿Pregunta?" maxlength="1000">
                           </div>
                           <div class="col-xl-10 mb-10">
                              <label style="padding-bottom: 10px; padding-top: 15px;">Respuesta:</label>
                              <textarea type="text" style="height: 10vh;" name="txt_respuesta" class="form-control text-center" placeholder="Respuesta" maxlength="2000"></textarea>
                           </div>
                           <div class="col-xl-2 mb-2">
                              <button type="submit" name="btn_agregar_faq" class="btn login-btn" style="margin-top: 52px; background-color:#1b1b1b">
                                 Agregar FAQ
                              </button><br>
                           </div>
                        </div>
                  </div>
                  </form>

               </div>

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

   <!-- Add Dog -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <div class="floating-container">
      <div class="floating-button" id="my-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="assets/icons/output-onlinepngtools.png" height="30px" alt="boton-agregar-perro" style="filter: invert(100%) brightness(100%) contrast(100%);"></div>
   </div>

   <!-- Add Pregunta
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
   <div class="floating-container">
      <div class="floating-button" id="my-button-add-faq" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><img src="assets/icons/output-onlinepngtools.png" height="30px" alt="boton-agregar-perro" style="filter: invert(100%) brightness(100%) contrast(100%);"></div>
   </div> -->
   <!-- Add Dog
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <div class="floating-container">
      <div class="floating-button" id="my-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+</div>
   </div> -->



   <!-- Modal -->
   <?php require_once('assets/modals/add-faq.html'); ?>
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content" style="height: 80px; margin-bottom: 40%;">
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

   <script>
      function activarTab(id, exceptuarId) {
         // Obtener el elemento tab con el id especificado
         var tab = document.querySelector("#" + id);

         // Activar el tab
         tab.classList.add("active");

         // Ocultar todos los demás tabs, excepto el tab con el id especificado
         var tabs = document.querySelectorAll(".tab-pane");

         // document.getElementById("a1").classList.remove("active")
         document.getElementById("a1").classList.add("active")
         document.getElementById("a2").classList.remove("active")


         <?php if ($_SESSION['auth'] == 1) {
            echo "document.getElementById(\"a2\").classList.remove(\"active\");";
         } else {
            echo "document.getElementById(\"a3\").classList.remove(\"active\");";
         } ?>
         // document.getElementById("a3").classList.remove("active")
         document.getElementById("a4").classList.remove("active")
         document.getElementById("a5").classList.remove("active")


         for (var i = 0; i < tabs.length; i++) {
            if (tabs[i] !== tab && tabs[i].id !== exceptuarId) {
               tabs[i].classList.remove("active");
            }
         }
      }

      document.getElementById("my-button").addEventListener("click", function() {
         activarTab("gestion_perros_adopcion", "");
         // activarTab("gestion_donacion", "gestion_perros_adopcion");
      }, false);
   </script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/purecounter/purecounter.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>