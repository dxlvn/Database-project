<?php
print "<html>
	<head>
	<link rel=stylesheet type=text/css href=../css/joueurs.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$ID = $_POST['ID'];


$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
$IDtest = null;
$result = $link->query("SELECT idJoueur FROM JOUEURS WHERE idJoueur = $ID;");
while ($tuple = mysqli_fetch_object($result)){
	$IDtest = $tuple->idJoueur;
} 
if($IDtest == null ) {"<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp Joueur inexistant
	</h1>"; }
else{


$query = "DELETE FROM JOUE where id = $ID " ;
$result = $link->query($query) or die("DELETE 1 Error: " . $link->error);

$query = "DELETE FROM TRANSFERTS where idTransfert = $ID " ;
$result = $link->query($query) or die("DELETE 2 Error: " . $link->error);

$query = "DELETE FROM DRAFT where (nom = (SELECT nom FROM JOUEURS WHERE idJoueur = $ID)) AND (prenom = (SELECT prenom FROM JOUEURS WHERE idJoueur = $ID)) " ;
$result = $link->query($query) or die("DELETE 3 Error: " . $link->error);

$query = "DELETE FROM JOUEURS where idJoueur = $ID " ;
$result = $link->query($query) or die("DELETE 4 Error: " . $link->error);

echo"<h1 class=headline >
			&nbsp &nbsp &nbsp Suppression réussie
	</h1>";

}
print "</body></html>";
$link->close();
?>
<html>
	<div align=center>
	<form action="joueurs.php"  >
		<input  type =submit value="Revenir à la page Joueur">
	</form>
	<div>
</html>
