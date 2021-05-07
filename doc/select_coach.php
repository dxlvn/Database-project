<?php
print "<html>
	<head>
		<link rel=stylesheet type=text/css href=../css/coach.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$choix = $_POST['choix'];
if(isset($_POST['nom'])) $nom = $_POST['nom'];
if(isset($_POST['equipe']))$equipe = $_POST['equipe'];
if(isset($_POST['titre'])) $titre = $_POST['titre'];

	
$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}
$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

if($choix == 1)$query = "SELECT * FROM COACH WHERE(nom like '$nom%')OR(prenom like 'nom')";
if($choix == 2)$query = "SELECT * FROM COACH WHERE equipe like '$equipe%'";
if($choix == 3)$query = "SELECT * FROM COACH WHERE titres>= $titre";
		 
$result = $link->query($query) or die("SELECT Error: " . $link->error);

	print "<table>
			  <thead>
					<tr>
						<th >ID</th>
						<th >Nom</th>
						<th >Prenom</th>
						<th >Equipe</th>
						<th >Titres</th>
						<th >Age</th>
					</tr>
				</thead>";
	  
	  

	while ($tuple = mysqli_fetch_object($result)){

	print " <tr>
				<td>$tuple->idCoach</td>
				<td>$tuple->nom</td>
				<td>$tuple->prenom</td>
				<td>$tuple->equipe</td>
				<td>$tuple->titres</td>
				<td>$tuple->age</td>
			
			</tr>";
	} 

		print "</table>";

print "</body></html>";
$link->close();
?>
<html>
	<form action="coach.php">
		<input type =submit value="Revenir à la page Coach">
		
	</form>
</html>
