<?php
include "header.php";
?>
<div class="container">
  <div class="row mb-5">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5">
          Les donnees du formulaire sont envoyées ici
        </h1>
        <p></p>
        <hr class="my-5">
        <h2 class="mb-4">confirmez vos données</h2>
        <!--  -->
        <?php
        // multiple recipients
        $to  = 'mirkouch@gmail.com' . ', '; // note the comma
        $to .= 'mirkouch@gmail.com';

        // subject
        $subject = 'Demande d\'information';
        $demande = '<p>Bonjour,<br>' . $_GET["nom"] . ' vous a contacté.</p>';
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        // Additional headers
        // $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        // $headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
        // $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        // $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

        // Mail it
        mail($to, $subject, $demande, $headers);
        setcookie($cookieName, base64_encode(json_encode($infosForm)), time() + (86400 * $cookieDuration), '/');
        ?>


        <!--  -->
        <!-- <?php
              var_dumpj($_POST);
              $to = "mirkouch@gmail.com";
              $subject = "Nouvelle demande de formulaire";
              $message = "";

              foreach ($_POST as $key => $value) {
                $message .= "$key: $value\n";
              }

              $headers = "From: noreply@yourwebsite.com";

              if (mail($to, $subject, $message, $headers)) {
                echo "Email envoyé avec succès";
              } else {
                echo "L'envoi de l'email a échoué";
              }
              ?> -->
        <!--  -->
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>
