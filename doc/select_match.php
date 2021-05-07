<?php
print "<html>
	<head>
		<link rel=stylesheet type=text/css href=../css/matchs.css>
		<title>Test Connexion</title>
	</head>
	<body>";
$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$date = $_POST['date'];

	
$link = new mysqli('localhost', 'admin', 'admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}
$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);

$query = "CREATE OR REPLACE VIEW V_total_match AS
 SELECT  p.equipe AS equipe1, q.equipe AS equipe2,m.score,m.date 
 FROM PARTICIPE p,PARTICIPE q,MATCHS m
 WHERE (m.idMatch= p.idMatch )
 AND(m.idMatch = q.idMatch  ) 
 AND(p.equipe <> q.equipe)
 GROUP BY m.idMatch";
		  
$result = $link->query($query) or die("SELECT Error: " . $link->error);

$query = "SELECT * 
		  FROM V_total_match
		  WHERE(equipe1 like '$equipe1')
		  OR(equipe2 like '$equipe2') 
		  OR(date like '$date')";
		  
$result = $link->query($query) or die("SELECT Error: " . $link->error);

print "<table>
			  <thead>
					<tr>
						<th >Equipe1</th>
						<th >Equipe2</th>
						<th >Score</th>
						<th >Date</th>
					</tr>
				</thead>";


while ($tuple = mysqli_fetch_object($result)){

print "  <tr>
			<td>$tuple->equipe1</td>
			<td>$tuple->equipe2</td>
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
	<form action="matchs.php">
		<input type =submit value="Revenir à la page Matchs">
		
	</form>
</html>
