<?php
session_start();
include "header.php";
include "database-content.php";
$connection = mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($_POST) {
  $infosForm = [];
  foreach ($_POST as $key => $value) {
    if (is_array($value)) {
      foreach ($value as $key2 => $value2) {
        $value2       = secur($value2);
        $value[$key2] = $value2;
      }
    } else {
      $value = secur($value);
    }
    $infosForm[$key] = $value;
  }
  // var_dumpj($infosForm);
  $nom_complet = $infosForm['nom'] . ' ' . $infosForm['prenom'];
  $insert      = "INSERT INTO stagiaires (nom, annee, formation) VALUES ('" . $nom_complet . "', '" . $infosForm['annee'] . "', '" . $infosForm['formation'] . "')";
  if (mysqli_query($connection, $insert)) {
    setcookie('infosForm', serialize($infosForm), time() + (86400 * 30), "/");
    $_SESSION['success_message'] = "New record created successfully";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
  } else {
    $_SESSION['error_message'] = 'Error: ' . $insert . '<br>' . mysqli_error($connection);
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
  }
}
if (isset($_COOKIE['infosForm'])) {
  $infosFormFromCookie = unserialize($_COOKIE['infosForm']);
  // var_dumpj($infosFormFromCookie);
}
if (isset($_SESSION['success_message'])) {
  echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
  unset($_SESSION['success_message']);
}

if (isset($_SESSION['error_message'])) {
  echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
  unset($_SESSION['error_message']);
}
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5 mb-5">Connection à la base de données et afficher dans un tableau le résultat de la query
        </h1>
        <form action="#" method="post" id="form3">
          <div class="d-flex">
            <div class="form-group me-3">
              <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" value="<?php if (isset($infosFormFromCookie['nom'])) {
  echo $infosFormFromCookie['nom'];
}
; ?>" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php if (isset($infosFormFromCookie['nom'])) {
  echo $infosFormFromCookie['prenom'];
}
; ?>" required>
            </div>
          </div>
          <div class="d-flex">
            <div class="form-group me-3">
              <input class="form-control" type="number" name="annee" id="annee" placeholder="Année" value="<?php if (isset($infosFormFromCookie['nom'])) {
  echo $infosFormFromCookie['annee'];
}
; ?>" required>`
            </div>
            <div class="form-group">
              <!--  -->
              <?php
$formations = ['Webdesigner', 'Webdeveloper', 'Technicien·ne', 'Français langue étrangère'];
?>
              <!--  -->
              <select class="form-select" name="formation" id="formation" aria-label="Formation" required>
                <option <?php if (!isset($infosFormFromCookie['formation'])) {echo 'selected';} ?>>Choisissez votre
                  formation</option>
                <!--  -->
                <?php foreach ($formations as $formation): ?>
                <option value="<?php echo str_replace('·', '', $formation); ?>"
                  <?php if (isset($infosFormFromCookie['formation']) && $formation == $infosFormFromCookie['formation']) {echo 'selected';} ?>>
                  <?php echo $formation; ?></option>
                <?php endforeach; ?>
              </select>
              <!--  -->
            </div>
          </div>
          <div class="form-group">
            <input class="btn btn-light" type="submit" form="form3" value="Inserez vos données dans la base de données">
          </div>
        </form>
        <div class="d-flex">
          <table class="table table-striped table-dark me-5">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Année</th>
                <th>Formation</th>
              </tr>
            </thead>
            <tbody>

              <?php
$query = mysqli_query($connection, "SELECT * FROM stagiaires");
while ($row = mysqli_fetch_assoc($query)) {
  ?>
              <tr>
                <td>
                  <?php echo $row['id']; ?>
                </td>
                <td>
                  <?php echo $row['nom']; ?>
                </td>
                <td>
                  <?php echo $row['annee']; ?>
                </td>
                <td>
                  <?php echo $row['formation']; ?>
                </td>
              </tr>
              <?php
}
?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>