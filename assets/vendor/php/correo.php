<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once (__DIR__ . "/../../PHPMailer/PHPMailer.php");
require_once (__DIR__ . "/../../PHPMailer/SMTP.php");

    if (isset($_POST['enviar'])) {
        try {
            if (!empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
                $correo = $_POST['correo'];
                $asunto = $_POST['asunto'];
                $mensaje = $_POST['mensaje'];
                $mail = new PHPMailer();
                
                // $mail->isSMTP();
                
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->Username = "email@email.com";
                $mail->Password = "codigo-generado";
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Adopteros Mail: ' . $asunto;
                $mail->Body = '<i>[Este email ha sido generado en forma automática]</i> <br> 

            ¡Gracias por contactarnos! ¡Pronto atenderemos tu consulta!

            <hr>

            <br><b>Enviado por:</b> ' . $correo . '

            <br><b>Asunto:</b> ' . $asunto . '

            <br><br><b>Mensaje:</b> ' . $mensaje . '

            <br><br>

            <hr>

            <h3>Adopteros Argentina. </h3>

            <p>

                Recoleta, Buenos Aires, Argentina; <br>Plaza Teniente General Emilio Mitre <br><br>

                <strong>Teléfono: </strong>+54 15 4089-3717<br>

                <strong>Email: </strong>adopterosargentina@gmail.com<br>

            </p>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->setFrom('email@email.com', 'Adopteros Argentina');
                $mail->addReplyTo('noreply@example.com', 'Adopteros Argentina<No Reply>');
                $mail->addAddress($correo, '');
                if (!$mail->send()) {
                    echo "<script> Swal.fire({icon:'error',

                    title:'¡Oops!',

                    text:'Ha ocurrido un error, intentalo más tarde',

                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});

                </script>";
                } else {
                    echo "<script> Swal.fire({icon:'success',

                    title:'¡Gracias por contactarnos!',

                    text:'Tu email ha sido enviado con éxito',

                    confirmButtonText: 'Continuar', confirmButtonColor: '#1a8e32',});

                </script>";
                }
            }
        }
        catch(Exception $ex) {
            echo $ex;
        }
    }
?>
