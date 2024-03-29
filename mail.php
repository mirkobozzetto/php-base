<?php
include 'answer.php'
?>

<?php
$mailContent = '
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
?>
