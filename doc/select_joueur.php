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
	"SELECT * 
		  FROM JOUEURS 
		  WHERE(nom like '$nom%')
		  OR(prenom like '$nom%')";
}

if (isset($_POST['equipe']))
	{
		$equipe = $_POST['equipe'];
			$query = 
				"SELECT * 
					  FROM JOUEURS 
					  WHERE(equipe like '$equipe%')";
	}
if (isset($_POST['pays'])) 
	{
		$pays = $_POST['pays'];
		$query = 
				"SELECT * 
					  FROM JOUEURS 
					  WHERE(pays like '$pays%')";
	
	}
if (isset($_POST['poste']))
	{
			$poste = $_POST['poste'];
			$query ="SELECT * 
					  FROM JOUEURS 
					  WHERE(poste like '$poste%')";
	}
if (isset($_POST['age'])) 
	{
			$age = $_POST['age'];
			$query ="SELECT * 
					  FROM JOUEURS 
					  WHERE(age = '$age')";
	}
if (isset($_POST['numero'])) 
	{
		$numero = $_POST['numero'];
		$query = "SELECT * 
				  FROM JOUEURS 
				  WHERE (numero = '$numero')" ;
	  }
		  
		  
$result = $link->query($query) or die("SELECT Error: " . $link->error);

print "<table>
			  <thead>
					<tr>
						<th >ID</th>
						<th >Nom</th>
						<th >Prenom</th>
						<th >Numero</th>
						<th >Equipe</th>
						<th >Pays</th>
						<th >Poste</th>
						<th >Age</th>
					</tr>
				</thead>";
while ($tuple = mysqli_fetch_object($result)){

	print " <tr>
				<td>$tuple->idJoueur</td>
				<td>$tuple->nom</td>
				<td>$tuple->prenom</td>
				<td>$tuple->numero</td>
				<td>$tuple->equipe</td>
				<td>$tuple->pays</td>
				<td>$tuple->poste</td>
				<td>$tuple->age</td>
			
			</tr>";
	} 

		print "</table>";

print "</body></html>";
$link->close();
?>
<html>
	<form action="joueurs.php">
		<input type =submit value="Revenir à la page Joueurs">
		
	</form>
</html>
