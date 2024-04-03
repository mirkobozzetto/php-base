<?php
include "header.php";
?>

<div class="container">
  <div class="row mb-5">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5">
          Les donnees du formulaire ont été envoyées avec succès
        </h1>
      </div>
    </div>
  </div>
</div>

<?php
$infosForm = array();
foreach ($_POST as $key => $value) {
  if (is_array($value)) {
    foreach ($value as $key2 => $value2) {
      $value2 = secur($value2);
      $value[$key2] = $value2;
    }
  } else {
    $value = secur($value);
  }
  $infosForm[$key] = $value;
}
?>

<!--  -->
<?php
// multiple recipients
$to  = 'mirkouch@gmail.com' . ', ';
$to .= 'elena@fij.be';

// subject
$subject = 'Demande d\'information';
// $demande = '<p>Bonjour,<br>' . $_GET["nom"] . ' vous a contacté.</p>';


// * message

$demande = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> ' . $subject . '</title>

  </head>
  <body
    style="
      font-family: Arial, sans-serif;
      background-color: #012e40;
      color: #f1e4d5;
      margin: 0;
      padding: 0;
    "
  >
    <table
      class="email-container"
      style="
        max-width: 800px;
        margin: 10rem auto;
        padding: 5px;
        border: 1px solid #f1e4d5;
        width: 100%;
        border-collapse: collapse;
      "
    >
      <tr>
        <td>
          <table
            style="
              width: 100%;
              margin: auto;
              border: 1px solid #f1e4d5;
              border-collapse: collapse;
            "
          >
            <tr>
              <th
                colspan="2"
                style="
                  background-color: #f1e4d5;
                  color: #012e40;
                  padding: 20px;
                  text-align: center;
                  font-size: 30px;
                "
              >
                Coordonnées
              </th>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Nom
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["nom"] . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Prénom
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["prenom"] . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Mail
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                <a
                  href="mailto: ' . $infosForm["email"] . ' "
                  style="color: #f1e4d5; text-decoration: underline"
                  >' . $infosForm["email"] . '</a
                >
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Formation
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["formation"] . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Code Postal
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["code_postal"] . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Centre de formation
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["centre_formation"] . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Déjà inscrit ?
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . (isset($infosForm["seance_information"]) ? 'Oui' : 'Non') . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Séance d\'information ?
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . (isset($infosForm["seance_information"]) ? 'Oui' : 'Non') . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Tests réussis ?
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . (isset($infosForm["tests_entree"]) ? 'Oui' : 'Non') . '
              </td>
            </tr>
            <tr>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                Demande
              </td>
              <td
                style="
                  background-color: #012e40;
                  color: #f1e4d5;
                  padding: 15px;
                  border: 1px solid #f1e4d5;
                "
              >
                ' . $infosForm["demande"] . '
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
';


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
// setcookie($cookieName, base64_encode(json_encode($infosForm)), time() + (86400 * $cookieDuration), '/');
?>


<!--  -->
<!-- <?php
      // var_dumpj($_POST);
      // $to = 'mirkouch@gmail.com' . ', ';
      // $to .= "elena@fij.be";
      // $subject = "Nouvelle demande de formulaire";
      // $message = "";

      // foreach ($_POST as $key => $value) {
      //   $message .= "$key: $value\n";
      // }

      // $headers = "From: noreply@yourwebsite.com";

      // if (mail($to, $subject, $message, $headers)) {
      //   echo "Email envoyé avec succès";
      // } else {
      //   echo "L'envoi de l'email a échoué";
      // }
      ?> -->
<!--  -->
<!-- </div>
</div>
</div>
</div> -->
<?php
include "footer.php";
?>
