<?php
print "<html>
	<head>
		<title>Test Connexion</title>
		<link rel=stylesheet type=text/css href=../css/equipes.css>
	</head>
	<body>";
$nomEquipe = $_POST['nomEquipe'];
$sigle = $_POST['sigle'];
$conference = $_POST['conference'];
$ville = $_POST['ville'];
$stade = $_POST['stade'];
$sponsors = $_POST['sponsors'];
$nombreTitres = $_POST['nombreTitres'];
$anneeCreation = $_POST['anneeCreation'];

$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);


$query = "INSERT INTO EQUIPE VALUES('$nomEquipe','$sigle','$conference','$ville','$stade','$sponsors', $nombreTitres,$anneeCreation)" ;
$result = $link->query($query) or die("INSERT Error: " . $link->error);



print "</body></html>";

$link->close();
?>
<html>	<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp &nbsp  Equipe inserée
	</h1>
	<div align = center>
	<form action="equipes.php">
		<input type =submit value="Revenir à la page équipe">
	</form>
	</div>
</html>
