<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
print "Connecté en tant que "; 
echo $_SESSION['user'];
?>
<DOCTYPE html>
	<html>
	<head>
		<title>Transferts</title>
		<link rel="stylesheet" type="text/css" href="../css/transferts.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/nbalogo1.jpg" />
		<meta charset="utf-8">
	</head>
	<body>

		<!-- Haut de page -->

		<header>
			<!-- https://www.bing.com/th?id=OIP.vYLsztCVw0e8QAz82pD0IAHaEo&pid=Api&rs=1 -->
			<img src="../img/contrat.jpg"width="300"height="150">
			<p>
			&nbsp &nbsp &nbsp Transferts NBA<br> 
			</p>
		</header>

		<!-- Menu de navigation -->

<nav class="menu-nav">
			<ul>
				<li class="btn">
				    <a href="../index.php">
				    	Accueil / Connexion
				    </a>
				</li>
				<li class="btn">
                	<a href="actualites.php">
                		Actualités
                	</a>
                </li>
				<li class="btn">
				    <a href="equipes.php">
				    	Équipes
				    </a>
				</li>               
                </li>
                <li class="btn">
					<a href="joueurs.php">
                		Joueurs
					</a>
                </li>	
				<li class="btn">
                	<a href="classement.php">
                		Classement
                	</a>
                </li>
                <li class="btn">
                	<a href="playoffs.php">
                		Playoffs
                	</a>
                </li>
                <li class="btn">
                	<a href="draft.php">
                		Draft
                	</a>
                </li>
                <li class="btn">
                	<a href="coach.php">
                		Coach
                	</a>
                </li>
                <li class="btn">
                	<a href="transferts.php">
                		Transferts
                	</a>
                </li>
                <li class="btn">
                	<a href="matchs.php">
                		Matchs
                	</a>
                </li>
                <li class="btn">
                	<a href="histoire.php">
                		Un peu d'histoire
                	</a>
                </li>
                <li class="btn">
                	<a href="contact.php">
                		Contact
                	</a>
                </li>
			</ul>
	</nav>
	
<h2> Chercher un transfert</h2>
	<table class="aff">
		<td>
	<h3>Par nom</h3>
	<form method="post" action = "select_transferts.php">
			 Nom	<div><input type=text required=required name=nom /><div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3>Par equipe de départ</h3>
	<form method="post" action = "select_transferts.php">
			 Equipe de départ	<div><input type=text required=required name=equipeDepart /><div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	<td>
	<h3>Par equipe d'arrivée</h3>
	<form method="post" action = "select_transferts.php">
			Equipe d'arrivée <div><input type=text required=required name=equipeArrivee /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	
	<td>
	<h3>Par montant</h3>
	<form method="post" action = "select_transferts.php">
			  <div><input type=number required=required name=montant /></div>
			<br><input type=submit value="Recherche" /><br>
	</form>
	</td>
	</table>
	
	
<?php
$link = new mysqli('localhost', 'admin', 'admin');

if ($link->connect_errno) {
	 die ("Erreur de connexion : errno: " . $link->errno . " error: " . $link->error);
	}
	$link->select_db('NBA') or die("Erreur selection BD: " . $link->error);
$query = "SELECT * FROM EQUIPE" ;
	$result = $link->query($query) or die("SELECT Error: " . $link->error);
	if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'coach' )
	{
	print"
	<h2> Transferer un joueur </h2>
	<form method=post action = insert_transferts.php>
				Nom <div><input type=text required=required name=nom /><div>
			    Prénom <div><input type=text required=required name=prenom /><div>
				 Equipe <br><select name =equipe >
							";
							while ($tuple = mysqli_fetch_object($result)){
							print" <option value='$tuple->nomEquipe' >$tuple->nomEquipe</option>";
						 }
							print "
				   </select>
				   <br>
				Montant du transfert <div><input type=number min=0 required=required name=montant /><div>
			<br><input type=submit value=Transferer />
	</form>
	<br>";}
?>

		<!-- Pied de page -->

<footer>
	<p>
		Copyright &copy; D-M - 2019 .
	</p>
</footer>

	</body>
</html>
