<?php
print "<html>
	<head>
		<link rel=stylesheet type=text/css href=../css/joueurs.css>
		<title>Test Connexion</title>
	</head>
	<body>";

$link = new mysqli('localhost', 'joueur', 'joueur');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}
$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

if (isset($_POST['nom'])) {
	$nom = $_POST['nom'];
	$query = 
	"SELECT j.nom,j.prenom,t.equipeDepart,t.equipeArrivee,t.montant
		  FROM TRANSFERTS t,JOUEURS j 
		  WHERE((j.nom like '$nom%')
		  OR(j.prenom like '$nom%'))
		  AND(j.idJoueur = t.idTransfert)";
}

if (isset($_POST['equipeDepart']))
	{
		$equipe = $_POST['equipeDepart'];
			$query = 
			"SELECT j.nom,j.prenom,t.equipeDepart,t.equipeArrivee,t.montant
				  FROM TRANSFERTS t,JOUEURS j 
				  WHERE(t.equipeDepart like '$equipe%')
				  AND(j.idJoueur = t.idTransfert)";
	}

if (isset($_POST['equipeArrivee']))
	{
			$equipe = $_POST['equipeArrivee'];
			$query = 
				"SELECT j.nom,j.prenom,t.equipeDepart,t.equipeArrivee,t.montant
					  FROM TRANSFERTS t,JOUEURS j 
					  WHERE(t.equipeArrivee like '$equipe%')
					  AND(j.idJoueur = t.idTransfert)";
	}
if (isset($_POST['montant'])) 
	{
			$montant = $_POST['montant'];
			$query = 
			"SELECT j.nom,j.prenom,t.equipeDepart,t.equipeArrivee,t.montant
					  FROM TRANSFERTS t,JOUEURS j 
					  WHERE(t.montant > $montant)
					  AND(j.idJoueur = t.idTransfert)";
	}

		  
		  
$result = $link->query($query) or die("SELECT Error: " . $link->error);

print "<table>
			  <thead>
					<tr>

						<th >Nom</th>
						<th >Prenom</th>
						<th >EquipeDepart</th>
						<th >EquipeArrivee</th>
						<th >Montant</th>
						
					</tr>
				</thead>";
while ($tuple = mysqli_fetch_object($result)){

	print " <tr>
				<td>$tuple->nom</td>
				<td>$tuple->prenom</td>
				<td>$tuple->equipeDepart</td>
				<td>$tuple->equipeArrivee</td>
				<td>$tuple->montant</td>
			
			</tr>";
	} 

		print "</table>";

print "</body></html>";
$link->close();
?>
<html>
	<form action="transferts.php">
		<input type =submit value="Revenir à la page Transfert">
		
	</form>
</html>
