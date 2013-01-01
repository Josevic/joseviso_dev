<?php 

if (isset($_POST['sent'])) {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $message = $_POST['inputMessage'];
    $aviso = "";


    // email de destino
    $emailToSend = "jvisov@gmail.com";
   
    // asunto del email
    $subject = "Message from JoseViso.com";

    if (!empty($name) && !empty($email) && !empty($message))
    {
      // Cuerpo del mensaje
      $mensaje.= "Name:   ".$name."\n";
      $mensaje.= "Email:    ".$email."\n";
      $mensaje.= "---------------------------------- \n\n";
      $mensaje.= $message."\n\n";
      $mensaje.= "---------------------------------- \n";
      $mensaje.= "Sent from http://joseviso.com \n";
     
      // headers del email
      $headers = "From: ".$email."\r\n";
     
      // Enviamos el mensaje
      if (mail($emailToSend, $subject, $mensaje, $headers)) {
          $sent = TRUE;
      } else {
          $sent = FALSE;
      }
    }
    else
    {
      $sent = FALSE;
    }
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Jose Viso | Envío de mensaje</title>
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    
    <div class="container">
            
       <div class="row">     
        <div class="span12 spacer">
          <?php if(isset($_POST['sent']) && ($sent===TRUE)): ?>
          <div class="alert alert-success">
            <h1>Mensaje enviado correctamente :)</h1>
            <p class="lead">Si es necesario te responderé con la mayor brevedad posible. Muchas gracias por contactarme.</p>
            <p class="lead">Saludos, José Viso</p>
          </div>
          <?php elseif(isset($_POST['sent']) && ($sent===FALSE)): ?>
            <div class="alert alert-error">
              <h1>OUCH! Error enviando el mensaje :(</h1>
              <p class="lead">Prueba a enviarme un correo electrónico a <b>contacto@joseviso.com</b>.</p> 
              <p class="lead">Si es necesario te responderé con la mayor brevedad posible. Muchas gracias por contactarme.</p>
              <p class="lead">Saludos, José Viso</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="centered">
        <a href="contact" class="btn btn-large btn-primary" type="button">Continuar</a>
      </div>
    </div> 

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>