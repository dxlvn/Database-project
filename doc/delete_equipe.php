<?php
print "<html>
	<head>
		<title>Test Connexion</title>
		<link rel=stylesheet type=text/css href=../css/equipes.css>
	</head>
	<body>";
$nom = $_POST['nom'];


$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);


$query = "DELETE FROM CLASSEMENT where equipe like '$nom' " ;
$result = $link->query($query) or die("DELETE 1 Error: " . $link->error);

$query = "DELETE FROM COACH where equipe like '$nom' " ;
$result = $link->query($query) or die("DELETE 2 Error: " . $link->error);

$query = "DELETE FROM DRAFT where equipe like '$nom'" ;
$result = $link->query($query) or die("DELETE 3 Error: " . $link->error);

$query = "DELETE FROM JOUE where equipe like '$nom'" ;
$result = $link->query($query) or die("DELETE 4 Error: " . $link->error);

$query = "DELETE FROM PARTICIPE where equipe like '$nom'" ;
$result = $link->query($query) or die("DELETE 5 Error: " . $link->error);

$query = "DELETE FROM TRANSFERTS where (equipeDepart like '$nom')OR(equipeArrivee like '$nom')" ;
$result = $link->query($query) or die("DELETE 6 Error: " . $link->error);

$query = "DELETE FROM PLAYOFFS where (vainqueur like '$nom') OR(perdant like '$nom')" ;
$result = $link->query($query) or die("DELETE 7 Error: " . $link->error);

$query = "DELETE FROM JOUEURS where equipe like '$nom'" ;
$result = $link->query($query) or die("DELETE 8 Error: " . $link->error);

$query = "DELETE FROM EQUIPE where nomEquipe like '$nom'" ;
$result = $link->query($query) or die("DELETE 9 Error: " . $link->error);

print "</body></html>";
$link->close();
echo"<h1 class=headline >
			Suppression réussie
	</h1>";
?>
<html>
	<div align=center>
	<form action="equipes.php">
		<input type =submit value="Revenir à la page Equipe">
	</form>
	</div>
</html>
