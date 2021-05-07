<?php
print "<html>
	<head>
	<link rel=stylesheet type=text/css href=../css/coach.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$equipe = $_POST['equipe'];
$titres = $_POST['titres'];
$age = $_POST['age'];

$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
	header('Locate : coach.php');
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);


$result = $link->query("SELECT MAX(idCoach)as max FROM COACH");
while ($tuple = mysqli_fetch_object($result)){
	$ID = $tuple->max +1;
} 

$query = "INSERT INTO COACH VALUES($ID,'$nom','$prenom','$equipe', $titres,$age)" ;

$result = $link->query($query) or die("INSERT Error: " . $link->error);



print "</body></html>";
$link->close();
?>
<html>	<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp &nbsp Coach inseré
	</h1>
	<div align = center>
	<form action="coach.php">
		<input type =submit value="Revenir à la page coach">
		
	</form>
</html>
