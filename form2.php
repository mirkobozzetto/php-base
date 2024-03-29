<?php
include "header.php";
?>

<div class="container">
  <div class="row mb-5">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5 mb-5">Les formulaire réponse sur une page externe</h1>
        <hr>
        <br>
        <div class="d-flex justify-content-between">
          <form style="width: 100vw" action="answer.php" method="post" id="form1">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Votre nom" name="nom" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Votre prénom" name="prenom" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control mt-3" placeholder="Votre email" name="email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control mt-3" placeholder="Votre code postal" name="code_postal">
            </div>
            <div class="form-group">
              <textarea class="form-control mt-3" placeholder="Votre demande ici" name="demande" rows="5"></textarea>
            </div>

            <select class="form-select mt-3" name="formation" required>
              <option value="">Choisissez une formation</option>
              <option value="formation1">Formation 1</option>
              <option value="formation2">Formation 2</option>
              <option value="formation3">Formation 3</option>
            </select>

            <select class="form-select mt-3" name="centre_formation" required>
              <option value="">Choisissez un centre de formations</option>
              <option value="centre1">Centre 1</option>
              <option value="centre2">Centre 2</option>
              <option value="centre3">Centre 3</option>
              <!-- Plus d'options ici si nécessaire -->
            </select>

            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="inscrit" name="inscrit" id="inscrit">
              <label class="form-check-label" for="inscrit">Êtes-vous déjà inscrit chez nous?</label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="seance_info" name="seance_info" id="seance_info">
              <label class="form-check-label" for="seance_info">Êtes-vous déjà venu à une séance
                d'information?</label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="tests_entree" name="tests_entree" id="tests_entree">
              <label class="form-check-label" for="tests_entree">Avez-vous réussi les tests d'entrée?</label>
            </div>
            <div class="col-12">
            </div>
            <button type="submit" class="btn btn-light mt-3">Envoyer votre demande</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include "footer.php";
?>
