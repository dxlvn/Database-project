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

if ( isset( $_POST['nomEquipe']))
{
	$nomEquipe = $_POST['nomEquipe'];
	
	$query = "SELECT * 
		  FROM EQUIPE
		  WHERE(nomEquipe like '$nomEquipe%')" ;
}
if (isset($_POST['conf']))
{
$conference = $_POST['conf'];
	
	$query = "SELECT * 
		  FROM EQUIPE
		  WHERE(conference like '$conference')" ;
}
if (isset($_POST['ville']))
{
	
$ville = $_POST['ville'];	
	$query = "SELECT * 
		  FROM EQUIPE
		  WHERE(ville like '$ville%')" ;
}
if (isset($_POST['anneeCreation']))
{
	
$anneeCreation = $_POST['anneeCreation'];
	
	$query = "SELECT * 
		  FROM EQUIPE
		  WHERE(anneeCreation = '$anneeCreation')" ;
}



$result = $link->query($query) or die("SELECT Error: " . $link->error);

print "<table>
			  <thead>
					<tr>
						<th >NomEquipe</th>
						<th >Sigle</th>
						<th >Conference</th>
						<th >Ville</th>
						<th >Stade</th>
						<th >Sponsors</th>
						<th >NombreTitres</th>
						<th >AnneeCreation</th>
					</tr>
				</thead>";
		while ($tuple = mysqli_fetch_object($result)){

		print " <tr>
					<th >$tuple->nomEquipe</th>
					<th >$tuple->sigle</th>
					<th >$tuple->conference</th>
					<th >$tuple->ville</th>
					<th >$tuple->stade</th>
					<th >$tuple->sponsor</th>
					<th >$tuple->nombreTitres</th>
					<th >$tuple->anneeCreation</th>
				</tr>";
		}
		print "</table>";

print "</body></html>";
$link->close();
?>
<html>
	<form action="equipes.php">
		<input type =submit value="Revenir à la page Equipe">
		
	</form>
</html>
