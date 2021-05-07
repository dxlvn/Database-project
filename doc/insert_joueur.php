<?php
print "<html>
	<head>
			<link rel=stylesheet type=text/css href=../css/joueurs.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$equipe = $_POST['equipe'];
$pays = $_POST['pays'];
$poste = $_POST['poste'];
$age = $_POST['age'];

$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);


$result = $link->query("SELECT MAX(idJoueur)as max FROM JOUEURS");
while ($tuple = mysqli_fetch_object($result)){
	$ID = $tuple->max +1;
} 


$query = "INSERT INTO JOUEURS VALUES($ID,'$nom','$prenom',$numero,'$equipe', '$pays','$poste',$age)" ;
$result = $link->query($query) or die("INSERT Error: " . $link->error);
$query = "INSERT INTO JOUE VALUES($ID,'$equipe')" ;
$result = $link->query($query) or die("INSERT Error: " . $link->error);


print "</body></html>";
$link->close();
?>
<html>
		<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp &nbsp Joueur inseré
	</h1>
	<div align = center>
	<form action="joueurs.php">
		<input type =submit value="Revenir à la page Joueurs">
	</form>
	</div>
</html>
