<?php
include "header.php";
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
              <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" value="">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prénom" value="">
            </div>
          </div>
          <div class="d-flex">
            <div class="form-group me-3">
              <input class="form-control" type="number" name="annee" id="annee" placeholder="Année" value="">
            </div>
            <div class="form-group">
              <select class="form-select" name="formation" id="formation" aria-label="Formation">
                <option selected>Choisissez votre formation</option>
                <option value="Webdesigner">Webdesigner</option>
                <option value="Webdeveloper">Webdeveloper</option>
                <option value="Technicien·ne">Technicien·ne</option>
                <option value="Français langue étrangère">Français langue étrangère</option>
              </select>
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
# ici votre contenu de la base de données
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