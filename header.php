<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP base</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/debug.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <?php
$menu = [
    ["href" => "variables.php", "content" => "Variables"],
    ["href" => "if.php", "content" => "If"],
    ["href" => "arrays.php", "content" => "Arrays"],
    ["href" => "form1.php", "content" => "1 page form"],
    ["href" => "form2.php", "content" => "2 pages form"],
    ["href" => "database.php", "content" => "Database"],
];

$current_page = basename($_SERVER['PHP_SELF']);
// var_dumpj($current_page);

foreach ($menu as $key => $value) {
    $active_class = ($value["href"] == $current_page) ? 'active' : '';
    ?>
            <li class="nav-item">
              <a class="nav-link  <?php echo $active_class; ?>" href="<?php echo $value["href"]; ?>">
                <?php echo $value["content"]; ?>
              </a>
            </li>
            <?php
}
?>
          </ul>
        </div>
      </div>
    </nav>
  </header>