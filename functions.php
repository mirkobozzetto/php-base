<?php
//joli var dump
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
  }
  echo "</code></pre>";
}
