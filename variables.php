<?php
include "header.php";
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="p-5 mb-4 bg-dark text-white rounded-4">
        <h1 class="display-5 mb-5">Les variables en php</h1>
        <?php
        $a = 10;
        $b = 2;
        $c = $a + $b; //addition
        $d = $a - $b; // soustratction/différence
        $e = $a * $b; // multiplication
        $f = $a / $b; // division
        $g = $a % $b; // modulo/modulus le sreste de la division entre deux valeur
        $h = intval($f); // intval() une fonction qui rend le nombre entre
        // parenthèse en nombre entier
        $i = $a . " = (" . $h . " x " . $b . ") + " . $g;

        if ($a > 15) {
          $classe = 'class="accent"';
        } else {
          $classe = "";
        }
        ?>
        <p <?php echo $classe; ?>>La valeur de la variable <span>$a</span> est : <span><?php echo $a; ?></span></p>
        <p class="accent">La valeur de la variable <span>$b</span> est : <span><?php echo $b; ?></span></p>
        <p class="accent">La somme est : <span><?php echo $c; ?></span></p>
        <p class="accent">La différence est : <span><?php echo $d; ?></span></p>
        <p class="accent">La multiplication est : <span><?php echo $e; ?></span></p>
        <p class="accent">La division est : <span><?php echo $f; ?></span></p>
        <p class="accent">
          Le reste est : <span><?php echo $g; ?></span><br>
          détail : <span><?php echo $i; ?></span>
        </p>
        <p class="accent">L'entier de la division : <span><?php echo $h; ?></span></p>
      </div>
    </div>
  </div>
</div>
