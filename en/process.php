<?php 

if (isset($_POST['sent'])) {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $message = $_POST['inputMessage'];

    // email to send
    $emailToSend = "jvisov@gmail.com";
   
    // email subject
    $subject = "Message from JoseViso.com";

    if (!empty($name) && !empty($email) && !empty($message))
    {
      $mensaje = "";
      
      // mensaje body
      $mensaje.= "Name:   ".$name."\n";
      $mensaje.= "Email:    ".$email."\n";
      $mensaje.= "---------------------------------- \n\n";
      $mensaje.= $message."\n\n";
      $mensaje.= "---------------------------------- \n";
      $mensaje.= "Sent from http://joseviso.com \n";
     
      // email headers
      $headers = "From: ".$email."\r\n";
     
      // sending the message
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
    <title>Jose Viso | Message sending</title>
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
            <h1>Message successfully sent :)</h1>
            <p class="lead">If necessary I'll reply you as soon as possible. Thank you for contacting me.</p>
            <p class="lead">Regards, José Viso.</p>
          </div>
          <?php elseif(isset($_POST['sent']) && ($sent===FALSE)): ?>
            <div class="alert alert-error">
              <h1>OUCH! Error sending the message :(</h1>
              <p class="lead">Try sending me an email to <b>contact@joseviso.com</b>.</p> 
              <p class="lead">If necessary I'll reply you as soon as possible. Thank you for contacting me.</p>
              <p class="lead">Regards, José Viso.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="centered">
        <a href="contact" class="btn btn-large btn-primary" type="button">Continue</a>
      </div>
    </div> 

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>