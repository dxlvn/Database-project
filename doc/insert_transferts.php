<?php
print "<html>
	<head>
	<link rel=stylesheet type=text/css href=../css/joueurs.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$montant = $_POST['montant'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$equipe = $_POST['equipe'];


$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}


$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

$result = $link->query("SELECT idJoueur,equipe FROM JOUEURS WHERE (nom = '$nom' )AND(prenom = '$prenom');");
$ID = null;
while ($tuple = mysqli_fetch_object($result)){
	$ID = $tuple->idJoueur;
	$eqtest =$tuple->equipe ;
} 
if($ID == null ) {print "Joueur inconnu";}
else{
$que_test = "SELECT idTransfert FROM TRANSFERTS WHERE idTransfert = $ID ;";
$test = $link->query($que_test);
$rowcount=mysqli_num_rows($test);


if( $rowcount == 0 ){
	
	$query = "INSERT INTO TRANSFERTS VALUES ($ID,'$eqtest','$equipe',$montant)";	
	$result = $link->query($query) or die("INSERT Error: " . $link->error);
	
}
else{
	$query = "UPDATE TRANSFERTS SET equipeDepart = equipeArrivee,
								equipeArrivee  = '$equipe',
								montant = $montant
					WHERE idTransfert = $ID";
	$result = $link->query($query) or die("INSERT Error: " . $link->error);
}
$query = "UPDATE JOUE SET equipe  = '$equipe'
				WHERE id = $ID ";
$result = $link->query($query) or die("INSERT Error: " . $link->error);

$query = "UPDATE JOUEURS SET equipe  = '$equipe'
				WHERE idJoueur= $ID";
$result = $link->query($query) or die("INSERT Error: " . $link->error);

}
print "</body></html>";
$link->close();
?>
<html>
	<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp &nbsp Transfert effectué
	</h1>
	<div align = center>
	<form action="transferts.php">
		<input type =submit value="Revenir à la page Transferts">
		
	</form>
	</div>
</html>
