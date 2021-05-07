<?php
print "<html>
	<head>
		<link rel=stylesheet type=text/css href=../css/matchs.css>
		<title>Test Connexion</title>
	</head>
	<body>";


	
$link = new mysqli('localhost', 'joueur', 'joueur');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}
$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

if (isset($_POST['vainqueur']) || isset($_POST['perdant']))
	{
		if (isset($_POST['vainqueur'])) $vainqueur = $_POST['vainqueur'];
		if (isset($_POST['perdant'])) $perdant = $_POST['perdant'];
			$query = 
				"SELECT * 
					  FROM PLAYOFFS
					  WHERE(vainqueur like '$vainqueur')
					  OR(perdant like '$perdant')";
	}
if (isset($_POST['phase'])) 
	{
		$phase = $_POST['phase'];
		$query = 
				"SELECT * 
					  FROM PLAYOFFS
					  WHERE(phase = '$phase')";
	
	}
if (isset($_POST['date']))
	{
		 $date = $_POST['date'];

			$query ="SELECT * 
					  FROM PLAYOFFS 
					  WHERE(date = '$date')";
	}

$result = $link->query($query) or die("SELECT Error: " . $link->error);

print "<table>
			  <thead>
					<tr>
						<th >Phase</th>
						<th >Vainqueur</th>
						<th >Perdant</th>
						<th >Score</th>
						<th >Date</th>
					</tr>
				</thead>";


while ($tuple = mysqli_fetch_object($result)){

print "  <tr>
			<td>$tuple->phase</td>
			<td>$tuple->vainqueur</td>
			<td>$tuple->perdant</td>
			<td>$tuple->score</td>
			<td>$tuple->date</td>
		</tr>
		";
} 
print "</table>";
print "</body></html>";
$link->close();
?>
<html>
	<form action="playoffs.php">
		<input type =submit value="Revenir à la page Playoffs">
		
	</form>
</html>
