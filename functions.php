<?php

function secur($data)
{
  $data = trim($data); // enlever tous les espaces comme tabs ou plusieurs espaces d'affilé
  $data = stripslashes($data); // enlever les backslashes ou \\ deviennent des \
  $data = htmlspecialchars($data); // convertis les caractères spéciaux en balises HTML
  return $data;
}
?>

<?php

function var_dumpj($d, $e = null)
{
  echo "<pre><code>";
  if ($e == "e") {
    echo $d;
  } else {
    if (is_array($d)) {
      print_r($d);
    } else {
      var_dump($d);
    }
    echo "</code></pre>";
  }
}
?>
