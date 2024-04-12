<?php
include "header.php";
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <?php
$titre = "Language de programmation PHP";
echo "<p>" . $titre . "</p>";
?>
        <h1 class="display-5 mb-5"><?php echo $titre; ?></h1>
        <p class="mb-5">PHP (officiellement, ce sigle est un acronyme récursif pour PHP Hypertext Preprocessor) est un
          langage de scripts généraliste et Open Source, spécialement conçu pour le développement d'applications web. Il
          peut être intégré facilement au HTML.</p>
        <a href="https://www.php.net/manual/fr/intro-whatis.php#:~:text=PHP%20(officiellement%2C%20ce%20sigle%20est,%C3%AAtre%20int%C3%A9gr%C3%A9%20facilement%20au%20HTML."
          class="btn btn-light btn-lg">Apprendre plus</a>
      </div>
    </div>
    <div class="col-6">
      <div
        class="p-5 mb-4 bg-dark text-white rounded-4 h-100 d-flex flex-column align-items-center justify-content-center">
        <?php
$leParagraphe = "Ce paragraphe est affiché en php";
echo '<p class="mb-0">' . $leParagraphe . "</p>";
?>
      </div>
    </div>
    <div class="col-6">
      <div
        class="p-5 mb-4 bg-dark text-white rounded-4 h-100 d-flex flex-column align-items-center justify-content-center">
        <?php
$leTitre = "Ce titre est affiché en php";
echo '<h2 class="mb-0">' . $leTitre . "</h2>";
?>
        <!-- <h2 class="mb-0">Ce titre est affiché en php</h2> -->
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>