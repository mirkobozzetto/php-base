<?php
include "header.php";
?>

<div class="container">
  <div class="row mb-5">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5 mb-5">Les formulaire reponse sur la même page</h1>
        <div class="d-flex justify-content-between">
          <form action="#" method="post" id="form1">
            <div class="d-flex justify-content-between">
              <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" id="prenom">
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="form-group">
                <label for="cp">Code postal</label>
                <input type="number" class="form-control" name="cp" id="cp">
              </div>
              <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail" id="mail">
              </div>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name="livraison" id="livraison">
              <label for="livraison">Livraison</label>
            </div>
            <div class="form-group">
              <label for="message">Votre message</label>
              <textarea class="form-control" name="message" id="message" rows="10"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-light" form="form1">Envoyer votre demande</button>
            </div>
          </form>
          <div class="reponse">
            <?php var_dumpj($_POST); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>
