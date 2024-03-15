<?php
	include "header.php";
?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-5 mb-4 bg-dark text-white rounded-4">
					<h1 class="display-5 mb-5">Les tableaux en php</h1>
<?php
	// les arrays indexées
	$a = array(1,2,8,4);
	var_dumpj($a);
	echo "<p>" . $a[2] . "</p>";
	echo "<p>Nombre d'éléments dans mon array \$a : " . count($a) . "</p>";

	$fruits = array("pomme", "poire", "kiwi", "pasteque", "banane", "tomate");
	echo "<p>" . $fruits[2] . "</p>";
	echo "<p>Nombre d'éléments dans mon array \$fruits : " . count($fruits) . "</p>";

	// arrays associatives
	$b = array("un" => 1, "deux" => 2, "trois" => 3);
	var_dumpj($b);
	echo "<p>Nombre d'éléments dans mon array \$b : " . count($b) . "</p>";

	$stagiaire1 = array(
		"nom" => "Schipor",
		"prenom" => "Elena",
		"formation" => "Dev",
		"annee" => 2024
	);
	$stagiaire2 = array(
		"nom" => "Smith",
		"prenom" => "Will",
		"formation" => "Gra",
		"annee" => 2025
	);
	var_dumpj($stagiaire1);
	echo "<p>Bonjour " . $stagiaire1["prenom"] . " " . $stagiaire1["nom"] . ". Bienvenue à la formation " . $stagiaire1["formation"] . " " . $stagiaire1["annee"] . ".</p>";
	var_dumpj($stagiaire2);
	echo "<p>Bonjour " . $stagiaire2["prenom"] . " " . $stagiaire2["nom"] . ". Bienvenue à la formation " . $stagiaire2["formation"] . " " . $stagiaire2["annee"] . ".</p>";
?>
					<p>Bonjour Elena Dickinson. Bienvenue à la formation Dev 2024.</p>
				</div>
			</div>
			<div class="col-12">
				<div class="p-5 mb-4 bg-dark text-white rounded-4">
					<h2>Les affichages des tableaux</h2>
<?php
	for ($i = 0; $i < count($fruits); $i++) { 
		echo "<p>l'élément sur position " . $i . " contient : " . $fruits[$i] . "</p>";
	}
?>
				</div>
			</div>
		</div>
	</div>
<?php
	include "footer.php";
?>