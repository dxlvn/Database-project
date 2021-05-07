<?php
session_start();
print "<html>
	<head>
			<link rel=stylesheet type=text/css href=../css/matchs.css>

		<title>Test Connexion</title>
	</head>
	<body>";
$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$score = $_POST['score'];
$date = $_POST['date'];
if($equipe1 == $equipe2)
{
	echo"<h3 class=headline >
			L'équipe à domicile ne peut pas être à l'exterieur en même temps 
	</h3>";
	 }
	else{
	

$link = new mysqli('localhost','admin','admin');
if ($link->connect_errno) {
 die ("Erreur de connexion : errno: " . $link->errno . " error: "
. $link->error);
}

$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
$result = $link->query("SELECT MAX(idMatch)as max FROM MATCHS");
while ($tuple = mysqli_fetch_object($result)){
	$ID = $tuple->max +1;
} 


$query = "INSERT INTO MATCHS VALUES($ID,'$date','$score')" ;
$result = $link->query($query) or die("INSERT Error: " . $link->error);

$result = $link->query("INSERT INTO PARTICIPE VALUES($ID,'$equipe1','oui')" ) or die("INSERT Error: " . $link->error);
$result = $link->query("INSERT INTO PARTICIPE VALUES($ID,'$equipe2','non')" ) or die("INSERT Error: " . $link->error);


print "</body></html>";


$link->close();
print"<h1 class=headline >
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Match inseré
	</h1>";


}

?>
<html>
	<div align = center>
	<form action="matchs.php">
		<input type =submit value="Revenir à la page Match">
	</form>
	</div>
</html>
