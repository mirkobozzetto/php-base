<?php
	include "header.php";
?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-5 mb-4 bg-dark text-white rounded-4">
					<h1 class="display-5 mb-5">Les conditions en php</h1>
<?php
	$a = 16;
	$b = 2.6;
	$prenom = 'Elena';
	$nom = "Dickinson";
	// caractère d'échapement \ pour afficher le nom de la variable dans une chaine de caractères commencée par des doubles guillements
	// pas besoin d'échapper le $ quand vous utiliser les apostrophes
	echo "<p>La valeur de la variable \$a est : " . $a . "</p>";
	echo '<p>La valeur de la variable $b est : ' . $b . "</p>";
	echo '<p>La valeur de la variable $prenom est : ' . $prenom . "</p>";
	echo '<p>La valeur de la variable $nom est : ' . $nom . "</p>";
?>
					<h2>Condition if ...</h2>
<?php
	if($prenom == "Elena") {
		echo "<p>Bonjour Elena !</p>";
	}
?>
					<h2>Condition if ... else</h2>
<?php
	if($a == 16){
		echo "<p>La valeur de \$a est égale à 16</p>";
	} else {
		echo "<p>La valeur de \$a n'est pas égale à 16, elle est égale à " . $a . "</p>";
	}
?>
					<h2>Condition if ... elseif ...</h2>
<?php
	if($a > $b){
		echo "<p>\$a est plus grand que \$b</p>";
	} elseif($a < $b){
		echo "<p>\$a est plus petit que \$b</p>";
	} elseif($a == $b){
		echo "<p>\$a est égal à \$b</p>";
	}
?>
					<h2>Condition switch</h2>
<?php
	$jour = "Jeudi";
	switch($jour){
		case "Lundi":
			echo "<p>On est le premier jour de la semaine !</p>";
			break;
		case "Mardi":
			echo "<p>On est le deuxième jour de la semaine !</p>";
			break;
		case "Vendredi":
			echo "<p>C'est le weekend !</p>";
			break;
		default:
			echo "<p>On est le $jour</p>";
			break;
	}
	$date = 5;
	switch($date){
		case 1:
			echo "<p>Lundi</p>";
			break;
		case 2:
			echo "<p>Mardi</p>";
			break;
		case 3:
			echo "<p>Mercredi</p>";
			break;
		case 4:
			echo "<p>Jeudi</p>";
			break;
		case 5:
			echo "<p>Vendredi! Yayyy</p>";
			break;
		case 6:
			echo "<p>Samedi</p>";
			break;
		case 7:
			echo "<p>Dimanche</p>";
			break;
		default:
			echo "<p>Il n'y a pas de jour de la semaine avec ce nombre</p>";
			break;
	}
?>
					<h2>Boucle for</h2>
<?php
	echo '<p class="accent">';
	for ($i = 0; $i < 10; $i++) {
		if($i == 0){
			echo "<span>" . $i . "</span>";
		} else {
			echo " " . $i;
		}	
	}
	echo "</p>";
?>
				</div>
			</div>
		</div>
	</div>
<?php
	include "footer.php";
?>