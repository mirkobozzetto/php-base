<?php
include "header.php";

function dateFR()
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Europe/Paris'));
    $jour    = $date->format('l');
    $jourNum = $date->format('d');
    $mois    = $date->format('F');
    $annee   = $date->format('Y');
    $heure   = $date->format('H');
    $minute  = $date->format('i');
    $seconde = $date->format('s');

    $joursEN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $joursFR = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $moisEN  = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $moisFR  = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

    $jour = str_replace($joursEN, $joursFR, $jour);
    $mois = str_replace($moisEN, $moisFR, $mois);

    $phraseDate = "le $jour $jourNum $mois $annee à $heure heures";
    if ($minute != "00") {
        $phraseDate .= " $minute minutes";
    }
    if ($seconde != "00") {
        $phraseDate .= " et $seconde secondes";
    }

    return $phraseDate;
}
?>
?>


<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5 mb-5">Format de la date</h1>
        <div class="d-flex">
          <form class="me-5" action="#" method="post" id="form3">
            <div class="d-flex">
              <div class="form-group me-3">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="date">Choisissez une date</label>
                <input type="datetime-local" name="date" id="date" class="form-control" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="cours">Cours</label>
              <select class="form-select" name="cours" id="cours">
                <option value="" selected>Choisissez un cours</option>
                <option value="jQuery">jQuery</option>
                <option value="Wordpress">Wordpress</option>
                <option value="SEO">SEO</option>
                <option value="Arts visuels">Arts visuels</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" value="Envoyez votre date" form="form3" class="btn btn-light">
            </div>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom    = $_POST['nom'];
    $date   = $_POST['date'];
    $cours  = $_POST['cours'];
    $dateFR = dateFR();
    echo '<pre>';
    var_dump($nom);
    var_dump($dateFR);
    var_dump($cours);
    echo '</pre>';
}
?>
          </form>
          <div class="format-date">
            <p class="mb-3"><strong>Le format de la date choisie ci-dessous</strong></p>
            <div class="profil d-flex bg-light text-dark p-3">
              <img class="w-25" src="https://www.fij.be/wp-content/themes/fij/images/logo_fij.svg" alt="profil">
              <div class="coordonnees ps-5 d-flex flex-column align-items-start justify-content-center">
                <p class="mb-1"><strong>Nom : </strong><u>DOE</u></p>
                <p class="mb-0"><strong>Inscrit au cours de : </strong> <u>SEO</u></p>
                <p class="mb-1"><strong>Date d'inscription</strong> : <br><u>11 Avril 2024 à 03h30</u></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>